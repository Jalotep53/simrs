<?php

namespace frontend\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use frontend\models\TimeoutSebelumInsisi;

/**
 * TimeoutSebelumInsisiSearch represents the model behind the search form of `frontend\models\TimeoutSebelumInsisi`.
 */
class TimeoutSebelumInsisiSearch extends TimeoutSebelumInsisi
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['no_rawat', 'tanggal', 'sncn', 'tindakan', 'kd_dokter_bedah', 'kd_dokter_anestesi', 'verbal_identitas', 'verbal_tindakan', 'verbal_area_insisi', 'penandaan_area_operasi', 'lama_operasi', 'penayangan_radiologi', 'penayangan_ctscan', 'penayangan_mri', 'antibiotik_profilaks', 'nama_antibiotik', 'jam_pemberian', 'antisipasi_kehilangan_darah', 'hal_khusus', 'hal_khusus_diperhatikan', 'tanggal_steril', 'petujuk_sterilisasi', 'verifikasi_preoperatif', 'nip_perawat_ok'], 'safe'],
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
        $query = TimeoutSebelumInsisi::find();

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
            'tanggal_steril' => $this->tanggal_steril,
        ]);

        $query->andFilterWhere(['like', 'no_rawat', $this->no_rawat])
            ->andFilterWhere(['like', 'sncn', $this->sncn])
            ->andFilterWhere(['like', 'tindakan', $this->tindakan])
            ->andFilterWhere(['like', 'kd_dokter_bedah', $this->kd_dokter_bedah])
            ->andFilterWhere(['like', 'kd_dokter_anestesi', $this->kd_dokter_anestesi])
            ->andFilterWhere(['like', 'verbal_identitas', $this->verbal_identitas])
            ->andFilterWhere(['like', 'verbal_tindakan', $this->verbal_tindakan])
            ->andFilterWhere(['like', 'verbal_area_insisi', $this->verbal_area_insisi])
            ->andFilterWhere(['like', 'penandaan_area_operasi', $this->penandaan_area_operasi])
            ->andFilterWhere(['like', 'lama_operasi', $this->lama_operasi])
            ->andFilterWhere(['like', 'penayangan_radiologi', $this->penayangan_radiologi])
            ->andFilterWhere(['like', 'penayangan_ctscan', $this->penayangan_ctscan])
            ->andFilterWhere(['like', 'penayangan_mri', $this->penayangan_mri])
            ->andFilterWhere(['like', 'antibiotik_profilaks', $this->antibiotik_profilaks])
            ->andFilterWhere(['like', 'nama_antibiotik', $this->nama_antibiotik])
            ->andFilterWhere(['like', 'jam_pemberian', $this->jam_pemberian])
            ->andFilterWhere(['like', 'antisipasi_kehilangan_darah', $this->antisipasi_kehilangan_darah])
            ->andFilterWhere(['like', 'hal_khusus', $this->hal_khusus])
            ->andFilterWhere(['like', 'hal_khusus_diperhatikan', $this->hal_khusus_diperhatikan])
            ->andFilterWhere(['like', 'petujuk_sterilisasi', $this->petujuk_sterilisasi])
            ->andFilterWhere(['like', 'verifikasi_preoperatif', $this->verifikasi_preoperatif])
            ->andFilterWhere(['like', 'nip_perawat_ok', $this->nip_perawat_ok]);

        return $dataProvider;
    }
}
