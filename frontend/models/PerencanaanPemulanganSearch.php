<?php

namespace frontend\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use frontend\models\PerencanaanPemulangan;

/**
 * PerencanaanPemulanganSearch represents the model behind the search form of `frontend\models\PerencanaanPemulangan`.
 */
class PerencanaanPemulanganSearch extends PerencanaanPemulangan
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['no_rawat', 'rencana_pulang', 'alasan_masuk', 'diagnosa_medis', 'pengaruh_ri_pasien_dan_keluarga', 'keterangan_pengaruh_ri_pasien_dan_keluarga', 'pengaruh_ri_pekerjaan_sekolah', 'keterangan_pengaruh_ri_pekerjaan_sekolah', 'pengaruh_ri_keuangan', 'keterangan_pengaruh_ri_keuangan', 'antisipasi_masalah_saat_pulang', 'keterangan_antisipasi_masalah_saat_pulang', 'bantuan_diperlukan_dalam', 'keterangan_bantuan_diperlukan_dalam', 'adakah_yang_membantu_keperluan', 'keterangan_adakah_yang_membantu_keperluan', 'pasien_tinggal_sendiri', 'keterangan_pasien_tinggal_sendiri', 'pasien_menggunakan_peralatan_medis', 'keterangan_pasien_menggunakan_peralatan_medis', 'pasien_memerlukan_alat_bantu', 'keterangan_pasien_memerlukan_alat_bantu', 'memerlukan_perawatan_khusus', 'keterangan_memerlukan_perawatan_khusus', 'bermasalah_memenuhi_kebutuhan', 'keterangan_bermasalah_memenuhi_kebutuhan', 'memiliki_nyeri_kronis', 'keterangan_memiliki_nyeri_kronis', 'memerlukan_edukasi_kesehatan', 'keterangan_memerlukan_edukasi_kesehatan', 'memerlukan_keterampilkan_khusus', 'keterangan_memerlukan_keterampilkan_khusus', 'nama_pasien_keluarga', 'nip'], 'safe'],
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
        $query = PerencanaanPemulangan::find();

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
            'rencana_pulang' => $this->rencana_pulang,
        ]);

        $query->andFilterWhere(['like', 'no_rawat', $this->no_rawat])
            ->andFilterWhere(['like', 'alasan_masuk', $this->alasan_masuk])
            ->andFilterWhere(['like', 'diagnosa_medis', $this->diagnosa_medis])
            ->andFilterWhere(['like', 'pengaruh_ri_pasien_dan_keluarga', $this->pengaruh_ri_pasien_dan_keluarga])
            ->andFilterWhere(['like', 'keterangan_pengaruh_ri_pasien_dan_keluarga', $this->keterangan_pengaruh_ri_pasien_dan_keluarga])
            ->andFilterWhere(['like', 'pengaruh_ri_pekerjaan_sekolah', $this->pengaruh_ri_pekerjaan_sekolah])
            ->andFilterWhere(['like', 'keterangan_pengaruh_ri_pekerjaan_sekolah', $this->keterangan_pengaruh_ri_pekerjaan_sekolah])
            ->andFilterWhere(['like', 'pengaruh_ri_keuangan', $this->pengaruh_ri_keuangan])
            ->andFilterWhere(['like', 'keterangan_pengaruh_ri_keuangan', $this->keterangan_pengaruh_ri_keuangan])
            ->andFilterWhere(['like', 'antisipasi_masalah_saat_pulang', $this->antisipasi_masalah_saat_pulang])
            ->andFilterWhere(['like', 'keterangan_antisipasi_masalah_saat_pulang', $this->keterangan_antisipasi_masalah_saat_pulang])
            ->andFilterWhere(['like', 'bantuan_diperlukan_dalam', $this->bantuan_diperlukan_dalam])
            ->andFilterWhere(['like', 'keterangan_bantuan_diperlukan_dalam', $this->keterangan_bantuan_diperlukan_dalam])
            ->andFilterWhere(['like', 'adakah_yang_membantu_keperluan', $this->adakah_yang_membantu_keperluan])
            ->andFilterWhere(['like', 'keterangan_adakah_yang_membantu_keperluan', $this->keterangan_adakah_yang_membantu_keperluan])
            ->andFilterWhere(['like', 'pasien_tinggal_sendiri', $this->pasien_tinggal_sendiri])
            ->andFilterWhere(['like', 'keterangan_pasien_tinggal_sendiri', $this->keterangan_pasien_tinggal_sendiri])
            ->andFilterWhere(['like', 'pasien_menggunakan_peralatan_medis', $this->pasien_menggunakan_peralatan_medis])
            ->andFilterWhere(['like', 'keterangan_pasien_menggunakan_peralatan_medis', $this->keterangan_pasien_menggunakan_peralatan_medis])
            ->andFilterWhere(['like', 'pasien_memerlukan_alat_bantu', $this->pasien_memerlukan_alat_bantu])
            ->andFilterWhere(['like', 'keterangan_pasien_memerlukan_alat_bantu', $this->keterangan_pasien_memerlukan_alat_bantu])
            ->andFilterWhere(['like', 'memerlukan_perawatan_khusus', $this->memerlukan_perawatan_khusus])
            ->andFilterWhere(['like', 'keterangan_memerlukan_perawatan_khusus', $this->keterangan_memerlukan_perawatan_khusus])
            ->andFilterWhere(['like', 'bermasalah_memenuhi_kebutuhan', $this->bermasalah_memenuhi_kebutuhan])
            ->andFilterWhere(['like', 'keterangan_bermasalah_memenuhi_kebutuhan', $this->keterangan_bermasalah_memenuhi_kebutuhan])
            ->andFilterWhere(['like', 'memiliki_nyeri_kronis', $this->memiliki_nyeri_kronis])
            ->andFilterWhere(['like', 'keterangan_memiliki_nyeri_kronis', $this->keterangan_memiliki_nyeri_kronis])
            ->andFilterWhere(['like', 'memerlukan_edukasi_kesehatan', $this->memerlukan_edukasi_kesehatan])
            ->andFilterWhere(['like', 'keterangan_memerlukan_edukasi_kesehatan', $this->keterangan_memerlukan_edukasi_kesehatan])
            ->andFilterWhere(['like', 'memerlukan_keterampilkan_khusus', $this->memerlukan_keterampilkan_khusus])
            ->andFilterWhere(['like', 'keterangan_memerlukan_keterampilkan_khusus', $this->keterangan_memerlukan_keterampilkan_khusus])
            ->andFilterWhere(['like', 'nama_pasien_keluarga', $this->nama_pasien_keluarga])
            ->andFilterWhere(['like', 'nip', $this->nip]);

        return $dataProvider;
    }
}
