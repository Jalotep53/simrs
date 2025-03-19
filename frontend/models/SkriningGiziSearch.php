<?php

namespace frontend\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use frontend\models\SkriningGizi;

/**
 * SkriningGiziSearch represents the model behind the search form of `frontend\models\SkriningGizi`.
 */
class SkriningGiziSearch extends SkriningGizi
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['no_rawat', 'tanggal', 'skrining_bb', 'skrining_tb', 'alergi', 'parameter_imt', 'skor_imt', 'parameter_bb', 'skor_bb', 'parameter_penyakit', 'skor_penyakit', 'skor_total', 'parameter_total', 'nip'], 'safe'],
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
        $query = SkriningGizi::find();

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
            'tanggal' => $this->tanggal,
        ]);

        $query->andFilterWhere(['like', 'no_rawat', $this->no_rawat])
            ->andFilterWhere(['like', 'skrining_bb', $this->skrining_bb])
            ->andFilterWhere(['like', 'skrining_tb', $this->skrining_tb])
            ->andFilterWhere(['like', 'alergi', $this->alergi])
            ->andFilterWhere(['like', 'parameter_imt', $this->parameter_imt])
            ->andFilterWhere(['like', 'skor_imt', $this->skor_imt])
            ->andFilterWhere(['like', 'parameter_bb', $this->parameter_bb])
            ->andFilterWhere(['like', 'skor_bb', $this->skor_bb])
            ->andFilterWhere(['like', 'parameter_penyakit', $this->parameter_penyakit])
            ->andFilterWhere(['like', 'skor_penyakit', $this->skor_penyakit])
            ->andFilterWhere(['like', 'skor_total', $this->skor_total])
            ->andFilterWhere(['like', 'parameter_total', $this->parameter_total])
            ->andFilterWhere(['like', 'nip', $this->nip]);

        return $dataProvider;
    }
}
