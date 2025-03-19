<?php

namespace frontend\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use frontend\models\TransferPasienAntarRuang;

/**
 * TransferPasienAntarRuangSearch represents the model behind the search form of `frontend\models\TransferPasienAntarRuang`.
 */
class TransferPasienAntarRuangSearch extends TransferPasienAntarRuang
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['no_rawat', 'tanggal_masuk', 'tanggal_pindah', 'asal_ruang', 'ruang_selanjutnya', 'diagnosa_utama', 'diagnosa_sekunder', 'indikasi_pindah_ruang', 'keterangan_indikasi_pindah_ruang', 'prosedur_yang_sudah_dilakukan', 'obat_yang_telah_diberikan', 'metode_pemindahan_pasien', 'peralatan_yang_menyertai', 'keterangan_peralatan_yang_menyertai', 'pemeriksaan_penunjang_yang_dilakukan', 'pasien_keluarga_menyetujui', 'nama_menyetujui', 'hubungan_menyetujui', 'keluhan_utama_sebelum_transfer', 'keadaan_umum_sebelum_transfer', 'td_sebelum_transfer', 'nadi_sebelum_transfer', 'rr_sebelum_transfer', 'suhu_sebelum_transfer', 'keluhan_utama_sesudah_transfer', 'keadaan_umum_sesudah_transfer', 'td_sesudah_transfer', 'nadi_sesudah_transfer', 'rr_sesudah_transfer', 'suhu_sesudah_transfer', 'nip_menyerahkan', 'nip_menerima'], 'safe'],
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
        $query = TransferPasienAntarRuang::find();

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
            'tanggal_masuk' => $this->tanggal_masuk,
            'tanggal_pindah' => $this->tanggal_pindah,
        ]);

        $query->andFilterWhere(['like', 'no_rawat', $this->no_rawat])
            ->andFilterWhere(['like', 'asal_ruang', $this->asal_ruang])
            ->andFilterWhere(['like', 'ruang_selanjutnya', $this->ruang_selanjutnya])
            ->andFilterWhere(['like', 'diagnosa_utama', $this->diagnosa_utama])
            ->andFilterWhere(['like', 'diagnosa_sekunder', $this->diagnosa_sekunder])
            ->andFilterWhere(['like', 'indikasi_pindah_ruang', $this->indikasi_pindah_ruang])
            ->andFilterWhere(['like', 'keterangan_indikasi_pindah_ruang', $this->keterangan_indikasi_pindah_ruang])
            ->andFilterWhere(['like', 'prosedur_yang_sudah_dilakukan', $this->prosedur_yang_sudah_dilakukan])
            ->andFilterWhere(['like', 'obat_yang_telah_diberikan', $this->obat_yang_telah_diberikan])
            ->andFilterWhere(['like', 'metode_pemindahan_pasien', $this->metode_pemindahan_pasien])
            ->andFilterWhere(['like', 'peralatan_yang_menyertai', $this->peralatan_yang_menyertai])
            ->andFilterWhere(['like', 'keterangan_peralatan_yang_menyertai', $this->keterangan_peralatan_yang_menyertai])
            ->andFilterWhere(['like', 'pemeriksaan_penunjang_yang_dilakukan', $this->pemeriksaan_penunjang_yang_dilakukan])
            ->andFilterWhere(['like', 'pasien_keluarga_menyetujui', $this->pasien_keluarga_menyetujui])
            ->andFilterWhere(['like', 'nama_menyetujui', $this->nama_menyetujui])
            ->andFilterWhere(['like', 'hubungan_menyetujui', $this->hubungan_menyetujui])
            ->andFilterWhere(['like', 'keluhan_utama_sebelum_transfer', $this->keluhan_utama_sebelum_transfer])
            ->andFilterWhere(['like', 'keadaan_umum_sebelum_transfer', $this->keadaan_umum_sebelum_transfer])
            ->andFilterWhere(['like', 'td_sebelum_transfer', $this->td_sebelum_transfer])
            ->andFilterWhere(['like', 'nadi_sebelum_transfer', $this->nadi_sebelum_transfer])
            ->andFilterWhere(['like', 'rr_sebelum_transfer', $this->rr_sebelum_transfer])
            ->andFilterWhere(['like', 'suhu_sebelum_transfer', $this->suhu_sebelum_transfer])
            ->andFilterWhere(['like', 'keluhan_utama_sesudah_transfer', $this->keluhan_utama_sesudah_transfer])
            ->andFilterWhere(['like', 'keadaan_umum_sesudah_transfer', $this->keadaan_umum_sesudah_transfer])
            ->andFilterWhere(['like', 'td_sesudah_transfer', $this->td_sesudah_transfer])
            ->andFilterWhere(['like', 'nadi_sesudah_transfer', $this->nadi_sesudah_transfer])
            ->andFilterWhere(['like', 'rr_sesudah_transfer', $this->rr_sesudah_transfer])
            ->andFilterWhere(['like', 'suhu_sesudah_transfer', $this->suhu_sesudah_transfer])
            ->andFilterWhere(['like', 'nip_menyerahkan', $this->nip_menyerahkan])
            ->andFilterWhere(['like', 'nip_menerima', $this->nip_menerima]);

        return $dataProvider;
    }
}
