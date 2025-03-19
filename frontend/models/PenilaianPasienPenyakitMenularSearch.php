<?php

namespace frontend\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use frontend\models\PenilaianPasienPenyakitMenular;

/**
 * PenilaianPasienPenyakitMenularSearch represents the model behind the search form of `frontend\models\PenilaianPasienPenyakitMenular`.
 */
class PenilaianPasienPenyakitMenularSearch extends PenilaianPasienPenyakitMenular
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['no_rawat', 'tanggal', 'kd_dokter', 'anamnesis', 'hubungan', 'pasien_mengetahui_kondisi_penyakitnya', 'penyakit_sama_serumah', 'riwayat_kontak', 'keterangan_riwayat_kontak', 'transmisi_penularan_penyakit', 'keterangan_transmisi_penularan_penyakit', 'kebutuhan_ruang_rawat', 'keluhan_yang_dirasakan_saat_ini', 'riwayat_penyakit_keluarga', 'riwayat_alergi', 'riwayat_vaksinasi', 'riwayat_pengobatan', 'diagnosa_utama', 'diagnosa_tambahan'], 'safe'],
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
        $query = PenilaianPasienPenyakitMenular::find();

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
            ->andFilterWhere(['like', 'kd_dokter', $this->kd_dokter])
            ->andFilterWhere(['like', 'anamnesis', $this->anamnesis])
            ->andFilterWhere(['like', 'hubungan', $this->hubungan])
            ->andFilterWhere(['like', 'pasien_mengetahui_kondisi_penyakitnya', $this->pasien_mengetahui_kondisi_penyakitnya])
            ->andFilterWhere(['like', 'penyakit_sama_serumah', $this->penyakit_sama_serumah])
            ->andFilterWhere(['like', 'riwayat_kontak', $this->riwayat_kontak])
            ->andFilterWhere(['like', 'keterangan_riwayat_kontak', $this->keterangan_riwayat_kontak])
            ->andFilterWhere(['like', 'transmisi_penularan_penyakit', $this->transmisi_penularan_penyakit])
            ->andFilterWhere(['like', 'keterangan_transmisi_penularan_penyakit', $this->keterangan_transmisi_penularan_penyakit])
            ->andFilterWhere(['like', 'kebutuhan_ruang_rawat', $this->kebutuhan_ruang_rawat])
            ->andFilterWhere(['like', 'keluhan_yang_dirasakan_saat_ini', $this->keluhan_yang_dirasakan_saat_ini])
            ->andFilterWhere(['like', 'riwayat_penyakit_keluarga', $this->riwayat_penyakit_keluarga])
            ->andFilterWhere(['like', 'riwayat_alergi', $this->riwayat_alergi])
            ->andFilterWhere(['like', 'riwayat_vaksinasi', $this->riwayat_vaksinasi])
            ->andFilterWhere(['like', 'riwayat_pengobatan', $this->riwayat_pengobatan])
            ->andFilterWhere(['like', 'diagnosa_utama', $this->diagnosa_utama])
            ->andFilterWhere(['like', 'diagnosa_tambahan', $this->diagnosa_tambahan]);

        return $dataProvider;
    }
}
