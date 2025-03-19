<?php

namespace frontend\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use frontend\models\PenilaianPreInduksi;

/**
 * PenilaianPreInduksiSearch represents the model behind the search form of `frontend\models\PenilaianPreInduksi`.
 */
class PenilaianPreInduksiSearch extends PenilaianPreInduksi
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['no_rawat', 'tanggal', 'kd_dokter', 'tensi', 'nadi', 'rr', 'suhu', 'ekg', 'lain_lain', 'asesmen', 'perencanaan', 'infus_perifier', 'cvc', 'posisi', 'premedikasi', 'premedikasi_keterangan', 'induksi', 'induksi_keterangan', 'face_mask_no', 'nasopharing_no', 'ett_no', 'ett_jenis', 'ett_viksasi', 'lma_no', 'lma_jenis', 'tracheostomi', 'bronchoscopi_fiberoptik', 'glidescopi', 'lain_lain_tatalaksana', 'intubasi_sesudah_tidur', 'intubasi_oral', 'intubasi_tracheostomi', 'intubasi_keterangan', 'sulit_ventilasi', 'sulit_intubasi', 'ventilasi', 'teknik_regional_jenis', 'teknik_regional_lokasi', 'teknik_regional_jenis_jarum', 'teknik_regional_kateter', 'teknik_regional_kateter_viksasi', 'teknik_regional_obat_obatan', 'teknik_regional_komplikasi', 'teknik_regional_hasil'], 'safe'],
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
        $query = PenilaianPreInduksi::find();

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
            ->andFilterWhere(['like', 'tensi', $this->tensi])
            ->andFilterWhere(['like', 'nadi', $this->nadi])
            ->andFilterWhere(['like', 'rr', $this->rr])
            ->andFilterWhere(['like', 'suhu', $this->suhu])
            ->andFilterWhere(['like', 'ekg', $this->ekg])
            ->andFilterWhere(['like', 'lain_lain', $this->lain_lain])
            ->andFilterWhere(['like', 'asesmen', $this->asesmen])
            ->andFilterWhere(['like', 'perencanaan', $this->perencanaan])
            ->andFilterWhere(['like', 'infus_perifier', $this->infus_perifier])
            ->andFilterWhere(['like', 'cvc', $this->cvc])
            ->andFilterWhere(['like', 'posisi', $this->posisi])
            ->andFilterWhere(['like', 'premedikasi', $this->premedikasi])
            ->andFilterWhere(['like', 'premedikasi_keterangan', $this->premedikasi_keterangan])
            ->andFilterWhere(['like', 'induksi', $this->induksi])
            ->andFilterWhere(['like', 'induksi_keterangan', $this->induksi_keterangan])
            ->andFilterWhere(['like', 'face_mask_no', $this->face_mask_no])
            ->andFilterWhere(['like', 'nasopharing_no', $this->nasopharing_no])
            ->andFilterWhere(['like', 'ett_no', $this->ett_no])
            ->andFilterWhere(['like', 'ett_jenis', $this->ett_jenis])
            ->andFilterWhere(['like', 'ett_viksasi', $this->ett_viksasi])
            ->andFilterWhere(['like', 'lma_no', $this->lma_no])
            ->andFilterWhere(['like', 'lma_jenis', $this->lma_jenis])
            ->andFilterWhere(['like', 'tracheostomi', $this->tracheostomi])
            ->andFilterWhere(['like', 'bronchoscopi_fiberoptik', $this->bronchoscopi_fiberoptik])
            ->andFilterWhere(['like', 'glidescopi', $this->glidescopi])
            ->andFilterWhere(['like', 'lain_lain_tatalaksana', $this->lain_lain_tatalaksana])
            ->andFilterWhere(['like', 'intubasi_sesudah_tidur', $this->intubasi_sesudah_tidur])
            ->andFilterWhere(['like', 'intubasi_oral', $this->intubasi_oral])
            ->andFilterWhere(['like', 'intubasi_tracheostomi', $this->intubasi_tracheostomi])
            ->andFilterWhere(['like', 'intubasi_keterangan', $this->intubasi_keterangan])
            ->andFilterWhere(['like', 'sulit_ventilasi', $this->sulit_ventilasi])
            ->andFilterWhere(['like', 'sulit_intubasi', $this->sulit_intubasi])
            ->andFilterWhere(['like', 'ventilasi', $this->ventilasi])
            ->andFilterWhere(['like', 'teknik_regional_jenis', $this->teknik_regional_jenis])
            ->andFilterWhere(['like', 'teknik_regional_lokasi', $this->teknik_regional_lokasi])
            ->andFilterWhere(['like', 'teknik_regional_jenis_jarum', $this->teknik_regional_jenis_jarum])
            ->andFilterWhere(['like', 'teknik_regional_kateter', $this->teknik_regional_kateter])
            ->andFilterWhere(['like', 'teknik_regional_kateter_viksasi', $this->teknik_regional_kateter_viksasi])
            ->andFilterWhere(['like', 'teknik_regional_obat_obatan', $this->teknik_regional_obat_obatan])
            ->andFilterWhere(['like', 'teknik_regional_komplikasi', $this->teknik_regional_komplikasi])
            ->andFilterWhere(['like', 'teknik_regional_hasil', $this->teknik_regional_hasil]);

        return $dataProvider;
    }
}
