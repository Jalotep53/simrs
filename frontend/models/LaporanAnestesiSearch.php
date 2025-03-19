<?php

namespace frontend\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use frontend\models\LaporanAnestesi;

/**
 * LaporanAnestesiSearch represents the model behind the search form of `frontend\models\LaporanAnestesi`.
 */
class LaporanAnestesiSearch extends LaporanAnestesi
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['no_rawat', 'mulai', 'selesai', 'tempat_pemantauan', 'tindakan_operasi', 'operator1', 'asisten_operator', 'dokter_anestesi', 'operator2', 'onloop', 'penata_anestesi', 'diagnosa_preop', 'diagnosa_postop', 'status_asa', 'karena', 'premedikasi', 'ttv_premedikasi_td', 'ttv_premedikasi_rr', 'ttv_premedikasi_hr', 'ttv_premedikasi_spo2', 'ttv_premedikasi_ekg', 'ttv_premedikasi_suhu', 'ttv_premedikasi_lain', 'lama_operasi', 'lama_anastesi', 'keadaan_umum_bb', 'keadaan_umum_tb', 'keadaan_umum_alergi', 'keadaan_umum_malampathy', 'keadaan_umum_e', 'keadaan_umum_v', 'keadaan_umum_m', 'jenis_anestesi_lokasi', 'jenis_anestesi_sedasi', 'jenis_anestesi_regional', 'jenis_anestesi_ga_ett', 'jenis_anestesi_ga_ntt', 'jenis_anestesi_ga_ema', 'jenis_anestesi_ga_bm', 'posisi', 'perdarahan', 'urine', 'komplikasi', 'ekstubasi', 'jumlah_pack', 'dipindahkan_ke', 'serah_terima_pasien', 'catatan', 'nip_recovery_room'], 'safe'],
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
        $query = LaporanAnestesi::find();

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
            'mulai' => $this->mulai,
            'selesai' => $this->selesai,
        ]);

        $query->andFilterWhere(['like', 'no_rawat', $this->no_rawat])
            ->andFilterWhere(['like', 'tempat_pemantauan', $this->tempat_pemantauan])
            ->andFilterWhere(['like', 'tindakan_operasi', $this->tindakan_operasi])
            ->andFilterWhere(['like', 'operator1', $this->operator1])
            ->andFilterWhere(['like', 'asisten_operator', $this->asisten_operator])
            ->andFilterWhere(['like', 'dokter_anestesi', $this->dokter_anestesi])
            ->andFilterWhere(['like', 'operator2', $this->operator2])
            ->andFilterWhere(['like', 'onloop', $this->onloop])
            ->andFilterWhere(['like', 'penata_anestesi', $this->penata_anestesi])
            ->andFilterWhere(['like', 'diagnosa_preop', $this->diagnosa_preop])
            ->andFilterWhere(['like', 'diagnosa_postop', $this->diagnosa_postop])
            ->andFilterWhere(['like', 'status_asa', $this->status_asa])
            ->andFilterWhere(['like', 'karena', $this->karena])
            ->andFilterWhere(['like', 'premedikasi', $this->premedikasi])
            ->andFilterWhere(['like', 'ttv_premedikasi_td', $this->ttv_premedikasi_td])
            ->andFilterWhere(['like', 'ttv_premedikasi_rr', $this->ttv_premedikasi_rr])
            ->andFilterWhere(['like', 'ttv_premedikasi_hr', $this->ttv_premedikasi_hr])
            ->andFilterWhere(['like', 'ttv_premedikasi_spo2', $this->ttv_premedikasi_spo2])
            ->andFilterWhere(['like', 'ttv_premedikasi_ekg', $this->ttv_premedikasi_ekg])
            ->andFilterWhere(['like', 'ttv_premedikasi_suhu', $this->ttv_premedikasi_suhu])
            ->andFilterWhere(['like', 'ttv_premedikasi_lain', $this->ttv_premedikasi_lain])
            ->andFilterWhere(['like', 'lama_operasi', $this->lama_operasi])
            ->andFilterWhere(['like', 'lama_anastesi', $this->lama_anastesi])
            ->andFilterWhere(['like', 'keadaan_umum_bb', $this->keadaan_umum_bb])
            ->andFilterWhere(['like', 'keadaan_umum_tb', $this->keadaan_umum_tb])
            ->andFilterWhere(['like', 'keadaan_umum_alergi', $this->keadaan_umum_alergi])
            ->andFilterWhere(['like', 'keadaan_umum_malampathy', $this->keadaan_umum_malampathy])
            ->andFilterWhere(['like', 'keadaan_umum_e', $this->keadaan_umum_e])
            ->andFilterWhere(['like', 'keadaan_umum_v', $this->keadaan_umum_v])
            ->andFilterWhere(['like', 'keadaan_umum_m', $this->keadaan_umum_m])
            ->andFilterWhere(['like', 'jenis_anestesi_lokasi', $this->jenis_anestesi_lokasi])
            ->andFilterWhere(['like', 'jenis_anestesi_sedasi', $this->jenis_anestesi_sedasi])
            ->andFilterWhere(['like', 'jenis_anestesi_regional', $this->jenis_anestesi_regional])
            ->andFilterWhere(['like', 'jenis_anestesi_ga_ett', $this->jenis_anestesi_ga_ett])
            ->andFilterWhere(['like', 'jenis_anestesi_ga_ntt', $this->jenis_anestesi_ga_ntt])
            ->andFilterWhere(['like', 'jenis_anestesi_ga_ema', $this->jenis_anestesi_ga_ema])
            ->andFilterWhere(['like', 'jenis_anestesi_ga_bm', $this->jenis_anestesi_ga_bm])
            ->andFilterWhere(['like', 'posisi', $this->posisi])
            ->andFilterWhere(['like', 'perdarahan', $this->perdarahan])
            ->andFilterWhere(['like', 'urine', $this->urine])
            ->andFilterWhere(['like', 'komplikasi', $this->komplikasi])
            ->andFilterWhere(['like', 'ekstubasi', $this->ekstubasi])
            ->andFilterWhere(['like', 'jumlah_pack', $this->jumlah_pack])
            ->andFilterWhere(['like', 'dipindahkan_ke', $this->dipindahkan_ke])
            ->andFilterWhere(['like', 'serah_terima_pasien', $this->serah_terima_pasien])
            ->andFilterWhere(['like', 'catatan', $this->catatan])
            ->andFilterWhere(['like', 'nip_recovery_room', $this->nip_recovery_room]);

        return $dataProvider;
    }
}
