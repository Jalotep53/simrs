<?php

namespace frontend\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use frontend\models\DiagnosaPasien;

/**
 * DiagnosaPasienSearch represents the model behind the search form of `frontend\models\DiagnosaPasien`.
 */
class DiagnosaPasienSearch extends DiagnosaPasien
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['no_rawat', 'kd_penyakit', 'status', 'status_penyakit'], 'safe'],
            [['prioritas'], 'integer'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }

    /**
     * Creates data provider instance with search query applied
     *
     * @param array $params
     *
     * @return ActiveDataProvider
     */
    public function search($params)
    {
        $query = DiagnosaPasien::find();

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        // grid filtering conditions
        $query->andFilterWhere([
            'prioritas' => $this->prioritas,
        ]);

        $query->andFilterWhere(['like', 'no_rawat', $this->no_rawat])
            ->andFilterWhere(['like', 'kd_penyakit', $this->kd_penyakit])
            ->andFilterWhere(['like', 'status', $this->status])
            ->andFilterWhere(['like', 'status_penyakit', $this->status_penyakit]);

        return $dataProvider;
    }
}
