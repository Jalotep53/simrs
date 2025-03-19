<?php

namespace frontend\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use frontend\models\SetServiceRanap;

/**
 * SetServiceRanapSearch represents the model behind the search form of `frontend\models\SetServiceRanap`.
 */
class SetServiceRanapSearch extends SetServiceRanap
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nama_service', 'laborat', 'radiologi', 'operasi', 'obat', 'ranap_dokter', 'ranap_paramedis', 'ralan_dokter', 'ralan_paramedis', 'tambahan', 'potongan', 'kamar', 'registrasi', 'harian', 'retur_Obat', 'resep_Pulang'], 'safe'],
            [['besar'], 'number'],
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
        $query = SetServiceRanap::find();

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
            'besar' => $this->besar,
        ]);

        $query->andFilterWhere(['like', 'nama_service', $this->nama_service])
            ->andFilterWhere(['like', 'laborat', $this->laborat])
            ->andFilterWhere(['like', 'radiologi', $this->radiologi])
            ->andFilterWhere(['like', 'operasi', $this->operasi])
            ->andFilterWhere(['like', 'obat', $this->obat])
            ->andFilterWhere(['like', 'ranap_dokter', $this->ranap_dokter])
            ->andFilterWhere(['like', 'ranap_paramedis', $this->ranap_paramedis])
            ->andFilterWhere(['like', 'ralan_dokter', $this->ralan_dokter])
            ->andFilterWhere(['like', 'ralan_paramedis', $this->ralan_paramedis])
            ->andFilterWhere(['like', 'tambahan', $this->tambahan])
            ->andFilterWhere(['like', 'potongan', $this->potongan])
            ->andFilterWhere(['like', 'kamar', $this->kamar])
            ->andFilterWhere(['like', 'registrasi', $this->registrasi])
            ->andFilterWhere(['like', 'harian', $this->harian])
            ->andFilterWhere(['like', 'retur_Obat', $this->retur_Obat])
            ->andFilterWhere(['like', 'resep_Pulang', $this->resep_Pulang]);

        return $dataProvider;
    }
}
