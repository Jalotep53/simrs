<?php

namespace frontend\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use frontend\models\PenilaianMedisRalanRehabMedik;

/**
 * PenilaianMedisRalanRehabMedikSearch represents the model behind the search form of `frontend\models\PenilaianMedisRalanRehabMedik`.
 */
class PenilaianMedisRalanRehabMedikSearch extends PenilaianMedisRalanRehabMedik
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['no_rawat', 'tanggal', 'kd_dokter', 'anamnesis', 'hubungan', 'keluhan_utama', 'rps', 'rpd', 'alergi', 'kesadaran', 'nyeri', 'skala_nyeri', 'td', 'nadi', 'suhu', 'rr', 'bb', 'kepala', 'keterangan_kepala', 'thoraks', 'keterangan_thoraks', 'abdomen', 'keterangan_abdomen', 'ekstremitas', 'keterangan_ekstremitas', 'columna', 'keterangan_columna', 'muskulos', 'keterangan_muskulos', 'lainnya', 'resiko_jatuh', 'resiko_nutrisional', 'kebutuhan_fungsional', 'diagnosa_medis', 'diagnosa_fungsi', 'penunjang_lain', 'fisio', 'okupasi', 'wicara', 'akupuntur', 'tatalain', 'frekuensi_terapi', 'fisioterapi', 'terapi_okupasi', 'terapi_wicara', 'terapi_akupuntur', 'terapi_lainnya', 'edukasi'], 'safe'],
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
        $query = PenilaianMedisRalanRehabMedik::find();

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
            'fisioterapi' => $this->fisioterapi,
            'terapi_okupasi' => $this->terapi_okupasi,
            'terapi_wicara' => $this->terapi_wicara,
            'terapi_akupuntur' => $this->terapi_akupuntur,
            'terapi_lainnya' => $this->terapi_lainnya,
        ]);

        $query->andFilterWhere(['like', 'no_rawat', $this->no_rawat])
            ->andFilterWhere(['like', 'kd_dokter', $this->kd_dokter])
            ->andFilterWhere(['like', 'anamnesis', $this->anamnesis])
            ->andFilterWhere(['like', 'hubungan', $this->hubungan])
            ->andFilterWhere(['like', 'keluhan_utama', $this->keluhan_utama])
            ->andFilterWhere(['like', 'rps', $this->rps])
            ->andFilterWhere(['like', 'rpd', $this->rpd])
            ->andFilterWhere(['like', 'alergi', $this->alergi])
            ->andFilterWhere(['like', 'kesadaran', $this->kesadaran])
            ->andFilterWhere(['like', 'nyeri', $this->nyeri])
            ->andFilterWhere(['like', 'skala_nyeri', $this->skala_nyeri])
            ->andFilterWhere(['like', 'td', $this->td])
            ->andFilterWhere(['like', 'nadi', $this->nadi])
            ->andFilterWhere(['like', 'suhu', $this->suhu])
            ->andFilterWhere(['like', 'rr', $this->rr])
            ->andFilterWhere(['like', 'bb', $this->bb])
            ->andFilterWhere(['like', 'kepala', $this->kepala])
            ->andFilterWhere(['like', 'keterangan_kepala', $this->keterangan_kepala])
            ->andFilterWhere(['like', 'thoraks', $this->thoraks])
            ->andFilterWhere(['like', 'keterangan_thoraks', $this->keterangan_thoraks])
            ->andFilterWhere(['like', 'abdomen', $this->abdomen])
            ->andFilterWhere(['like', 'keterangan_abdomen', $this->keterangan_abdomen])
            ->andFilterWhere(['like', 'ekstremitas', $this->ekstremitas])
            ->andFilterWhere(['like', 'keterangan_ekstremitas', $this->keterangan_ekstremitas])
            ->andFilterWhere(['like', 'columna', $this->columna])
            ->andFilterWhere(['like', 'keterangan_columna', $this->keterangan_columna])
            ->andFilterWhere(['like', 'muskulos', $this->muskulos])
            ->andFilterWhere(['like', 'keterangan_muskulos', $this->keterangan_muskulos])
            ->andFilterWhere(['like', 'lainnya', $this->lainnya])
            ->andFilterWhere(['like', 'resiko_jatuh', $this->resiko_jatuh])
            ->andFilterWhere(['like', 'resiko_nutrisional', $this->resiko_nutrisional])
            ->andFilterWhere(['like', 'kebutuhan_fungsional', $this->kebutuhan_fungsional])
            ->andFilterWhere(['like', 'diagnosa_medis', $this->diagnosa_medis])
            ->andFilterWhere(['like', 'diagnosa_fungsi', $this->diagnosa_fungsi])
            ->andFilterWhere(['like', 'penunjang_lain', $this->penunjang_lain])
            ->andFilterWhere(['like', 'fisio', $this->fisio])
            ->andFilterWhere(['like', 'okupasi', $this->okupasi])
            ->andFilterWhere(['like', 'wicara', $this->wicara])
            ->andFilterWhere(['like', 'akupuntur', $this->akupuntur])
            ->andFilterWhere(['like', 'tatalain', $this->tatalain])
            ->andFilterWhere(['like', 'frekuensi_terapi', $this->frekuensi_terapi])
            ->andFilterWhere(['like', 'edukasi', $this->edukasi]);

        return $dataProvider;
    }
}
