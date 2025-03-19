<?php

namespace frontend\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use frontend\models\ChecklistPostOperasi;

/**
 * ChecklistPostOperasiSearch represents the model behind the search form of `frontend\models\ChecklistPostOperasi`.
 */
class ChecklistPostOperasiSearch extends ChecklistPostOperasi
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['no_rawat', 'tanggal', 'sncn', 'tindakan', 'kd_dokter_bedah', 'kd_dokter_anestesi', 'keadaan_umum', 'pemeriksaan_penunjang_rontgen', 'keterangan_pemeriksaan_penunjang_rontgen', 'pemeriksaan_penunjang_ekg', 'keterangan_pemeriksaan_penunjang_ekg', 'pemeriksaan_penunjang_usg', 'keterangan_pemeriksaan_penunjang_usg', 'pemeriksaan_penunjang_ctscan', 'keterangan_pemeriksaan_penunjang_ctscan', 'pemeriksaan_penunjang_mri', 'keterangan_pemeriksaan_penunjang_mri', 'jenis_cairan_infus', 'kateter_urine', 'tanggal_pemasangan_kateter', 'warna_kateter', 'jumlah_kateter', 'area_luka_operasi', 'drain', 'jumlah_drain', 'letak_drain', 'warna_drain', 'jaringan_pa', 'nip_perawat_ok', 'nip_perawat_anestesi'], 'safe'],
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
        $query = ChecklistPostOperasi::find();

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
            'tanggal_pemasangan_kateter' => $this->tanggal_pemasangan_kateter,
        ]);

        $query->andFilterWhere(['like', 'no_rawat', $this->no_rawat])
            ->andFilterWhere(['like', 'sncn', $this->sncn])
            ->andFilterWhere(['like', 'tindakan', $this->tindakan])
            ->andFilterWhere(['like', 'kd_dokter_bedah', $this->kd_dokter_bedah])
            ->andFilterWhere(['like', 'kd_dokter_anestesi', $this->kd_dokter_anestesi])
            ->andFilterWhere(['like', 'keadaan_umum', $this->keadaan_umum])
            ->andFilterWhere(['like', 'pemeriksaan_penunjang_rontgen', $this->pemeriksaan_penunjang_rontgen])
            ->andFilterWhere(['like', 'keterangan_pemeriksaan_penunjang_rontgen', $this->keterangan_pemeriksaan_penunjang_rontgen])
            ->andFilterWhere(['like', 'pemeriksaan_penunjang_ekg', $this->pemeriksaan_penunjang_ekg])
            ->andFilterWhere(['like', 'keterangan_pemeriksaan_penunjang_ekg', $this->keterangan_pemeriksaan_penunjang_ekg])
            ->andFilterWhere(['like', 'pemeriksaan_penunjang_usg', $this->pemeriksaan_penunjang_usg])
            ->andFilterWhere(['like', 'keterangan_pemeriksaan_penunjang_usg', $this->keterangan_pemeriksaan_penunjang_usg])
            ->andFilterWhere(['like', 'pemeriksaan_penunjang_ctscan', $this->pemeriksaan_penunjang_ctscan])
            ->andFilterWhere(['like', 'keterangan_pemeriksaan_penunjang_ctscan', $this->keterangan_pemeriksaan_penunjang_ctscan])
            ->andFilterWhere(['like', 'pemeriksaan_penunjang_mri', $this->pemeriksaan_penunjang_mri])
            ->andFilterWhere(['like', 'keterangan_pemeriksaan_penunjang_mri', $this->keterangan_pemeriksaan_penunjang_mri])
            ->andFilterWhere(['like', 'jenis_cairan_infus', $this->jenis_cairan_infus])
            ->andFilterWhere(['like', 'kateter_urine', $this->kateter_urine])
            ->andFilterWhere(['like', 'warna_kateter', $this->warna_kateter])
            ->andFilterWhere(['like', 'jumlah_kateter', $this->jumlah_kateter])
            ->andFilterWhere(['like', 'area_luka_operasi', $this->area_luka_operasi])
            ->andFilterWhere(['like', 'drain', $this->drain])
            ->andFilterWhere(['like', 'jumlah_drain', $this->jumlah_drain])
            ->andFilterWhere(['like', 'letak_drain', $this->letak_drain])
            ->andFilterWhere(['like', 'warna_drain', $this->warna_drain])
            ->andFilterWhere(['like', 'jaringan_pa', $this->jaringan_pa])
            ->andFilterWhere(['like', 'nip_perawat_ok', $this->nip_perawat_ok])
            ->andFilterWhere(['like', 'nip_perawat_anestesi', $this->nip_perawat_anestesi]);

        return $dataProvider;
    }
}
