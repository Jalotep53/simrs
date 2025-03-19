<?php

namespace frontend\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use frontend\models\RujukanInternalPoli;

/**
 * RujukanInternalPoliSearch represents the model behind the search form of `frontend\models\RujukanInternalPoli`.
 */
class RujukanInternalPoliSearch extends RujukanInternalPoli
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['no_rawat', 'kd_dokter', 'kd_poli'], 'safe'],
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
        $query = RujukanInternalPoli::find();

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
        $query->andFilterWhere(['like', 'no_rawat', $this->no_rawat])
            ->andFilterWhere(['like', 'kd_dokter', $this->kd_dokter])
            ->andFilterWhere(['like', 'kd_poli', $this->kd_poli]);

        return $dataProvider;
    }
}
