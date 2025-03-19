<?php

namespace frontend\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use frontend\models\PenilaianMedisRalanGawatDaruratPsikiatri;

/**
 * PenilaianMedisRalanGawatDaruratPsikiatriSearch represents the model behind the search form of `frontend\models\PenilaianMedisRalanGawatDaruratPsikiatri`.
 */
class PenilaianMedisRalanGawatDaruratPsikiatriSearch extends PenilaianMedisRalanGawatDaruratPsikiatri
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['no_rawat', 'tanggal', 'kd_dokter', 'anamnesis', 'hubungan', 'keluhan_utama', 'gejala_menyertai', 'faktor_pencetus', 'riwayat_penyakit_dahulu', 'keterangan_riwayat_penyakit_dahulu', 'riwayat_kehamilan', 'riwayat_sosial', 'keterangan_riwayat_sosial', 'riwayat_pekerjaan', 'keterangan_riwayat_pekerjaan', 'riwayat_obat_diminum', 'faktor_kepribadian_premorbid', 'faktor_keturunan', 'keterangan_faktor_keturunan', 'faktor_organik', 'keterangan_faktor_organik', 'riwayat_alergi', 'fisik_kesadaran', 'fisik_td', 'fisik_rr', 'fisik_suhu', 'fisik_nyeri', 'fisik_nadi', 'fisik_bb', 'fisik_tb', 'fisik_status_nutrisi', 'fisik_gcs', 'status_kelainan_kepala', 'keterangan_status_kelainan_kepala', 'status_kelainan_leher', 'keterangan_status_kelainan_leher', 'status_kelainan_dada', 'keterangan_status_kelainan_dada', 'status_kelainan_perut', 'keterangan_status_kelainan_perut', 'status_kelainan_anggota_gerak', 'keterangan_status_kelainan_anggota_gerak', 'status_lokalisata', 'psikiatrik_kesan_umum', 'psikiatrik_sikap_prilaku', 'psikiatrik_kesadaran', 'psikiatrik_orientasi', 'psikiatrik_daya_ingat', 'psikiatrik_persepsi', 'psikiatrik_pikiran', 'psikiatrik_insight', 'laborat', 'radiologi', 'ekg', 'diagnosis', 'permasalahan', 'instruksi_medis', 'rencana_target', 'pulang_dipulangkan', 'keterangan_pulang_dipulangkan', 'pulang_dirawat_diruang', 'pulang_indikasi_ranap', 'pulang_dirujuk_ke', 'pulang_alasan_dirujuk', 'pulang_paksa', 'keterangan_pulang_paksa', 'pulang_meninggal_igd', 'pulang_penyebab_kematian', 'fisik_pulang_kesadaran', 'fisik_pulang_td', 'fisik_pulang_nadi', 'fisik_pulang_gcs', 'fisik_pulang_suhu', 'fisik_pulang_rr', 'edukasi'], 'safe'],
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
        $query = PenilaianMedisRalanGawatDaruratPsikiatri::find();

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
            ->andFilterWhere(['like', 'keluhan_utama', $this->keluhan_utama])
            ->andFilterWhere(['like', 'gejala_menyertai', $this->gejala_menyertai])
            ->andFilterWhere(['like', 'faktor_pencetus', $this->faktor_pencetus])
            ->andFilterWhere(['like', 'riwayat_penyakit_dahulu', $this->riwayat_penyakit_dahulu])
            ->andFilterWhere(['like', 'keterangan_riwayat_penyakit_dahulu', $this->keterangan_riwayat_penyakit_dahulu])
            ->andFilterWhere(['like', 'riwayat_kehamilan', $this->riwayat_kehamilan])
            ->andFilterWhere(['like', 'riwayat_sosial', $this->riwayat_sosial])
            ->andFilterWhere(['like', 'keterangan_riwayat_sosial', $this->keterangan_riwayat_sosial])
            ->andFilterWhere(['like', 'riwayat_pekerjaan', $this->riwayat_pekerjaan])
            ->andFilterWhere(['like', 'keterangan_riwayat_pekerjaan', $this->keterangan_riwayat_pekerjaan])
            ->andFilterWhere(['like', 'riwayat_obat_diminum', $this->riwayat_obat_diminum])
            ->andFilterWhere(['like', 'faktor_kepribadian_premorbid', $this->faktor_kepribadian_premorbid])
            ->andFilterWhere(['like', 'faktor_keturunan', $this->faktor_keturunan])
            ->andFilterWhere(['like', 'keterangan_faktor_keturunan', $this->keterangan_faktor_keturunan])
            ->andFilterWhere(['like', 'faktor_organik', $this->faktor_organik])
            ->andFilterWhere(['like', 'keterangan_faktor_organik', $this->keterangan_faktor_organik])
            ->andFilterWhere(['like', 'riwayat_alergi', $this->riwayat_alergi])
            ->andFilterWhere(['like', 'fisik_kesadaran', $this->fisik_kesadaran])
            ->andFilterWhere(['like', 'fisik_td', $this->fisik_td])
            ->andFilterWhere(['like', 'fisik_rr', $this->fisik_rr])
            ->andFilterWhere(['like', 'fisik_suhu', $this->fisik_suhu])
            ->andFilterWhere(['like', 'fisik_nyeri', $this->fisik_nyeri])
            ->andFilterWhere(['like', 'fisik_nadi', $this->fisik_nadi])
            ->andFilterWhere(['like', 'fisik_bb', $this->fisik_bb])
            ->andFilterWhere(['like', 'fisik_tb', $this->fisik_tb])
            ->andFilterWhere(['like', 'fisik_status_nutrisi', $this->fisik_status_nutrisi])
            ->andFilterWhere(['like', 'fisik_gcs', $this->fisik_gcs])
            ->andFilterWhere(['like', 'status_kelainan_kepala', $this->status_kelainan_kepala])
            ->andFilterWhere(['like', 'keterangan_status_kelainan_kepala', $this->keterangan_status_kelainan_kepala])
            ->andFilterWhere(['like', 'status_kelainan_leher', $this->status_kelainan_leher])
            ->andFilterWhere(['like', 'keterangan_status_kelainan_leher', $this->keterangan_status_kelainan_leher])
            ->andFilterWhere(['like', 'status_kelainan_dada', $this->status_kelainan_dada])
            ->andFilterWhere(['like', 'keterangan_status_kelainan_dada', $this->keterangan_status_kelainan_dada])
            ->andFilterWhere(['like', 'status_kelainan_perut', $this->status_kelainan_perut])
            ->andFilterWhere(['like', 'keterangan_status_kelainan_perut', $this->keterangan_status_kelainan_perut])
            ->andFilterWhere(['like', 'status_kelainan_anggota_gerak', $this->status_kelainan_anggota_gerak])
            ->andFilterWhere(['like', 'keterangan_status_kelainan_anggota_gerak', $this->keterangan_status_kelainan_anggota_gerak])
            ->andFilterWhere(['like', 'status_lokalisata', $this->status_lokalisata])
            ->andFilterWhere(['like', 'psikiatrik_kesan_umum', $this->psikiatrik_kesan_umum])
            ->andFilterWhere(['like', 'psikiatrik_sikap_prilaku', $this->psikiatrik_sikap_prilaku])
            ->andFilterWhere(['like', 'psikiatrik_kesadaran', $this->psikiatrik_kesadaran])
            ->andFilterWhere(['like', 'psikiatrik_orientasi', $this->psikiatrik_orientasi])
            ->andFilterWhere(['like', 'psikiatrik_daya_ingat', $this->psikiatrik_daya_ingat])
            ->andFilterWhere(['like', 'psikiatrik_persepsi', $this->psikiatrik_persepsi])
            ->andFilterWhere(['like', 'psikiatrik_pikiran', $this->psikiatrik_pikiran])
            ->andFilterWhere(['like', 'psikiatrik_insight', $this->psikiatrik_insight])
            ->andFilterWhere(['like', 'laborat', $this->laborat])
            ->andFilterWhere(['like', 'radiologi', $this->radiologi])
            ->andFilterWhere(['like', 'ekg', $this->ekg])
            ->andFilterWhere(['like', 'diagnosis', $this->diagnosis])
            ->andFilterWhere(['like', 'permasalahan', $this->permasalahan])
            ->andFilterWhere(['like', 'instruksi_medis', $this->instruksi_medis])
            ->andFilterWhere(['like', 'rencana_target', $this->rencana_target])
            ->andFilterWhere(['like', 'pulang_dipulangkan', $this->pulang_dipulangkan])
            ->andFilterWhere(['like', 'keterangan_pulang_dipulangkan', $this->keterangan_pulang_dipulangkan])
            ->andFilterWhere(['like', 'pulang_dirawat_diruang', $this->pulang_dirawat_diruang])
            ->andFilterWhere(['like', 'pulang_indikasi_ranap', $this->pulang_indikasi_ranap])
            ->andFilterWhere(['like', 'pulang_dirujuk_ke', $this->pulang_dirujuk_ke])
            ->andFilterWhere(['like', 'pulang_alasan_dirujuk', $this->pulang_alasan_dirujuk])
            ->andFilterWhere(['like', 'pulang_paksa', $this->pulang_paksa])
            ->andFilterWhere(['like', 'keterangan_pulang_paksa', $this->keterangan_pulang_paksa])
            ->andFilterWhere(['like', 'pulang_meninggal_igd', $this->pulang_meninggal_igd])
            ->andFilterWhere(['like', 'pulang_penyebab_kematian', $this->pulang_penyebab_kematian])
            ->andFilterWhere(['like', 'fisik_pulang_kesadaran', $this->fisik_pulang_kesadaran])
            ->andFilterWhere(['like', 'fisik_pulang_td', $this->fisik_pulang_td])
            ->andFilterWhere(['like', 'fisik_pulang_nadi', $this->fisik_pulang_nadi])
            ->andFilterWhere(['like', 'fisik_pulang_gcs', $this->fisik_pulang_gcs])
            ->andFilterWhere(['like', 'fisik_pulang_suhu', $this->fisik_pulang_suhu])
            ->andFilterWhere(['like', 'fisik_pulang_rr', $this->fisik_pulang_rr])
            ->andFilterWhere(['like', 'edukasi', $this->edukasi]);

        return $dataProvider;
    }
}
