<?php

namespace frontend\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use frontend\models\DiagnosaCorona;

/**
 * DiagnosaCoronaSearch represents the model behind the search form of `frontend\models\DiagnosaCorona`.
 */
class DiagnosaCoronaSearch extends DiagnosaCorona
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['no_rkm_medis', 'kode_icd', 'nama_penyakit', 'status'], 'safe'],
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
        $query = DiagnosaCorona::find();

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
        $query->andFilterWhere(['like', 'no_rkm_medis', $this->no_rkm_medis])
            ->andFilterWhere(['like', 'kode_icd', $this->kode_icd])
            ->andFilterWhere(['like', 'nama_penyakit', $this->nama_penyakit])
            ->andFilterWhere(['like', 'status', $this->status]);

        return $dataProvider;
    }
}
