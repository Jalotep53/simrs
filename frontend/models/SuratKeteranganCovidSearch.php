<?php

namespace frontend\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use frontend\models\SuratKeteranganCovid;

/**
 * SuratKeteranganCovidSearch represents the model behind the search form of `frontend\models\SuratKeteranganCovid`.
 */
class SuratKeteranganCovidSearch extends SuratKeteranganCovid
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['no_surat', 'no_rawat', 'kd_dokter', 'nip', 'igm', 'igg', 'sehat', 'tidaksehat', 'berlakumulai', 'berlakuselsai'], 'safe'],
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
        $query = SuratKeteranganCovid::find();

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
            'berlakumulai' => $this->berlakumulai,
            'berlakuselsai' => $this->berlakuselsai,
        ]);

        $query->andFilterWhere(['like', 'no_surat', $this->no_surat])
            ->andFilterWhere(['like', 'no_rawat', $this->no_rawat])
            ->andFilterWhere(['like', 'kd_dokter', $this->kd_dokter])
            ->andFilterWhere(['like', 'nip', $this->nip])
            ->andFilterWhere(['like', 'igm', $this->igm])
            ->andFilterWhere(['like', 'igg', $this->igg])
            ->andFilterWhere(['like', 'sehat', $this->sehat])
            ->andFilterWhere(['like', 'tidaksehat', $this->tidaksehat]);

        return $dataProvider;
    }
}
