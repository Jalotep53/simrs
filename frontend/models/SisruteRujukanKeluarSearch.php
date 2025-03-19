<?php

namespace frontend\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use frontend\models\SisruteRujukanKeluar;

/**
 * SisruteRujukanKeluarSearch represents the model behind the search form of `frontend\models\SisruteRujukanKeluar`.
 */
class SisruteRujukanKeluarSearch extends SisruteRujukanKeluar
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['no_rawat', 'no_rujuk', 'no_rkm_medis', 'nm_pasien', 'no_ktp', 'no_peserta', 'jk', 'tgl_lahir', 'tmp_lahir', 'alamat', 'no_tlp', 'jns_rujukan', 'tgl_rujuk', 'kd_faskes_tujuan', 'nm_faskes_tujuan', 'kd_alasan', 'alasan_rujuk', 'alasan_lainnya', 'kd_diagnosa', 'diagnosa_rujuk', 'nik_dokter', 'dokter_perujuk', 'nik_petugas', 'petugas_entry', 'anamnesis_pemeriksaan', 'kesadaran', 'tekanan_darah', 'nadi', 'suhu', 'respirasi', 'keadaan_umum', 'tingkat_nyeri', 'alergi', 'laboratorium', 'radiologi', 'terapitindakan'], 'safe'],
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
        $query = SisruteRujukanKeluar::find();

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
            'tgl_lahir' => $this->tgl_lahir,
            'tgl_rujuk' => $this->tgl_rujuk,
        ]);

        $query->andFilterWhere(['like', 'no_rawat', $this->no_rawat])
            ->andFilterWhere(['like', 'no_rujuk', $this->no_rujuk])
            ->andFilterWhere(['like', 'no_rkm_medis', $this->no_rkm_medis])
            ->andFilterWhere(['like', 'nm_pasien', $this->nm_pasien])
            ->andFilterWhere(['like', 'no_ktp', $this->no_ktp])
            ->andFilterWhere(['like', 'no_peserta', $this->no_peserta])
            ->andFilterWhere(['like', 'jk', $this->jk])
            ->andFilterWhere(['like', 'tmp_lahir', $this->tmp_lahir])
            ->andFilterWhere(['like', 'alamat', $this->alamat])
            ->andFilterWhere(['like', 'no_tlp', $this->no_tlp])
            ->andFilterWhere(['like', 'jns_rujukan', $this->jns_rujukan])
            ->andFilterWhere(['like', 'kd_faskes_tujuan', $this->kd_faskes_tujuan])
            ->andFilterWhere(['like', 'nm_faskes_tujuan', $this->nm_faskes_tujuan])
            ->andFilterWhere(['like', 'kd_alasan', $this->kd_alasan])
            ->andFilterWhere(['like', 'alasan_rujuk', $this->alasan_rujuk])
            ->andFilterWhere(['like', 'alasan_lainnya', $this->alasan_lainnya])
            ->andFilterWhere(['like', 'kd_diagnosa', $this->kd_diagnosa])
            ->andFilterWhere(['like', 'diagnosa_rujuk', $this->diagnosa_rujuk])
            ->andFilterWhere(['like', 'nik_dokter', $this->nik_dokter])
            ->andFilterWhere(['like', 'dokter_perujuk', $this->dokter_perujuk])
            ->andFilterWhere(['like', 'nik_petugas', $this->nik_petugas])
            ->andFilterWhere(['like', 'petugas_entry', $this->petugas_entry])
            ->andFilterWhere(['like', 'anamnesis_pemeriksaan', $this->anamnesis_pemeriksaan])
            ->andFilterWhere(['like', 'kesadaran', $this->kesadaran])
            ->andFilterWhere(['like', 'tekanan_darah', $this->tekanan_darah])
            ->andFilterWhere(['like', 'nadi', $this->nadi])
            ->andFilterWhere(['like', 'suhu', $this->suhu])
            ->andFilterWhere(['like', 'respirasi', $this->respirasi])
            ->andFilterWhere(['like', 'keadaan_umum', $this->keadaan_umum])
            ->andFilterWhere(['like', 'tingkat_nyeri', $this->tingkat_nyeri])
            ->andFilterWhere(['like', 'alergi', $this->alergi])
            ->andFilterWhere(['like', 'laboratorium', $this->laboratorium])
            ->andFilterWhere(['like', 'radiologi', $this->radiologi])
            ->andFilterWhere(['like', 'terapitindakan', $this->terapitindakan]);

        return $dataProvider;
    }
}
