<?php

namespace frontend\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use frontend\models\PermintaanLabpa;

/**
 * PermintaanLabpaSearch represents the model behind the search form of `frontend\models\PermintaanLabpa`.
 */
class PermintaanLabpaSearch extends PermintaanLabpa
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['noorder', 'no_rawat', 'tgl_permintaan', 'jam_permintaan', 'tgl_sampel', 'jam_sampel', 'tgl_hasil', 'jam_hasil', 'dokter_perujuk', 'status', 'informasi_tambahan', 'diagnosa_klinis', 'pengambilan_bahan', 'diperoleh_dengan', 'lokasi_jaringan', 'diawetkan_dengan', 'pernah_dilakukan_di', 'tanggal_pa_sebelumnya', 'nomor_pa_sebelumnya', 'diagnosa_pa_sebelumnya'], 'safe'],
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
        $query = PermintaanLabpa::find();

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
            'tgl_permintaan' => $this->tgl_permintaan,
            'jam_permintaan' => $this->jam_permintaan,
            'tgl_sampel' => $this->tgl_sampel,
            'jam_sampel' => $this->jam_sampel,
            'tgl_hasil' => $this->tgl_hasil,
            'jam_hasil' => $this->jam_hasil,
            'pengambilan_bahan' => $this->pengambilan_bahan,
            'tanggal_pa_sebelumnya' => $this->tanggal_pa_sebelumnya,
        ]);

        $query->andFilterWhere(['like', 'noorder', $this->noorder])
            ->andFilterWhere(['like', 'no_rawat', $this->no_rawat])
            ->andFilterWhere(['like', 'dokter_perujuk', $this->dokter_perujuk])
            ->andFilterWhere(['like', 'status', $this->status])
            ->andFilterWhere(['like', 'informasi_tambahan', $this->informasi_tambahan])
            ->andFilterWhere(['like', 'diagnosa_klinis', $this->diagnosa_klinis])
            ->andFilterWhere(['like', 'diperoleh_dengan', $this->diperoleh_dengan])
            ->andFilterWhere(['like', 'lokasi_jaringan', $this->lokasi_jaringan])
            ->andFilterWhere(['like', 'diawetkan_dengan', $this->diawetkan_dengan])
            ->andFilterWhere(['like', 'pernah_dilakukan_di', $this->pernah_dilakukan_di])
            ->andFilterWhere(['like', 'nomor_pa_sebelumnya', $this->nomor_pa_sebelumnya])
            ->andFilterWhere(['like', 'diagnosa_pa_sebelumnya', $this->diagnosa_pa_sebelumnya]);

        return $dataProvider;
    }
}
