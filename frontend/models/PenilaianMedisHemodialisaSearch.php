<?php

namespace frontend\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use frontend\models\PenilaianMedisHemodialisa;

/**
 * PenilaianMedisHemodialisaSearch represents the model behind the search form of `frontend\models\PenilaianMedisHemodialisa`.
 */
class PenilaianMedisHemodialisaSearch extends PenilaianMedisHemodialisa
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['no_rawat', 'tanggal', 'kd_dokter', 'anamnesis', 'hubungan', 'ruangan', 'alergi', 'nyeri', 'status_nutrisi', 'hipertensi', 'keterangan_hipertensi', 'diabetes', 'keterangan_diabetes', 'batu_saluran_kemih', 'keterangan_batu_saluran_kemih', 'operasi_saluran_kemih', 'keterangan_operasi_saluran_kemih', 'infeksi_saluran_kemih', 'keterangan_infeksi_saluran_kemih', 'bengkak_seluruh_tubuh', 'keterangan_bengkak_seluruh_tubuh', 'urin_berdarah', 'keterangan_urin_berdarah', 'penyakit_ginjal_laom', 'keterangan_penyakit_ginjal_laom', 'penyakit_lain', 'keterangan_penyakit_lain', 'konsumsi_obat_nefro', 'keterangan_konsumsi_obat_nefro', 'dialisis_pertama', 'pernah_cpad', 'tanggal_cpad', 'pernah_transplantasi', 'tanggal_transplantasi', 'keadaan_umum', 'kesadaran', 'nadi', 'bb', 'td', 'suhu', 'napas', 'tb', 'hepatomegali', 'splenomegali', 'ascites', 'edema', 'whezzing', 'ronchi', 'ikterik', 'tekanan_vena', 'anemia', 'kardiomegali', 'bising', 'thorax', 'tanggal_thorax', 'ekg', 'tanggal_ekg', 'bno', 'tanggal_bno', 'usg', 'tanggal_usg', 'renogram', 'tanggal_renogram', 'biopsi', 'tanggal_biopsi', 'ctscan', 'tanggal_ctscan', 'arteriografi', 'tanggal_arteriografi', 'kultur_urin', 'tanggal_kultur_urin', 'laborat', 'tanggal_laborat', 'hematokrit', 'hemoglobin', 'leukosit', 'trombosit', 'hitung_jenis', 'ureum', 'urin_lengkap', 'kreatinin', 'cct', 'sgot', 'sgpt', 'ct', 'asam_urat', 'hbsag', 'anti_hcv', 'edukasi'], 'safe'],
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
        $query = PenilaianMedisHemodialisa::find();

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
            'dialisis_pertama' => $this->dialisis_pertama,
            'tanggal_cpad' => $this->tanggal_cpad,
            'tanggal_transplantasi' => $this->tanggal_transplantasi,
            'tanggal_thorax' => $this->tanggal_thorax,
            'tanggal_ekg' => $this->tanggal_ekg,
            'tanggal_bno' => $this->tanggal_bno,
            'tanggal_usg' => $this->tanggal_usg,
            'tanggal_renogram' => $this->tanggal_renogram,
            'tanggal_biopsi' => $this->tanggal_biopsi,
            'tanggal_ctscan' => $this->tanggal_ctscan,
            'tanggal_arteriografi' => $this->tanggal_arteriografi,
            'tanggal_kultur_urin' => $this->tanggal_kultur_urin,
            'tanggal_laborat' => $this->tanggal_laborat,
        ]);

        $query->andFilterWhere(['like', 'no_rawat', $this->no_rawat])
            ->andFilterWhere(['like', 'kd_dokter', $this->kd_dokter])
            ->andFilterWhere(['like', 'anamnesis', $this->anamnesis])
            ->andFilterWhere(['like', 'hubungan', $this->hubungan])
            ->andFilterWhere(['like', 'ruangan', $this->ruangan])
            ->andFilterWhere(['like', 'alergi', $this->alergi])
            ->andFilterWhere(['like', 'nyeri', $this->nyeri])
            ->andFilterWhere(['like', 'status_nutrisi', $this->status_nutrisi])
            ->andFilterWhere(['like', 'hipertensi', $this->hipertensi])
            ->andFilterWhere(['like', 'keterangan_hipertensi', $this->keterangan_hipertensi])
            ->andFilterWhere(['like', 'diabetes', $this->diabetes])
            ->andFilterWhere(['like', 'keterangan_diabetes', $this->keterangan_diabetes])
            ->andFilterWhere(['like', 'batu_saluran_kemih', $this->batu_saluran_kemih])
            ->andFilterWhere(['like', 'keterangan_batu_saluran_kemih', $this->keterangan_batu_saluran_kemih])
            ->andFilterWhere(['like', 'operasi_saluran_kemih', $this->operasi_saluran_kemih])
            ->andFilterWhere(['like', 'keterangan_operasi_saluran_kemih', $this->keterangan_operasi_saluran_kemih])
            ->andFilterWhere(['like', 'infeksi_saluran_kemih', $this->infeksi_saluran_kemih])
            ->andFilterWhere(['like', 'keterangan_infeksi_saluran_kemih', $this->keterangan_infeksi_saluran_kemih])
            ->andFilterWhere(['like', 'bengkak_seluruh_tubuh', $this->bengkak_seluruh_tubuh])
            ->andFilterWhere(['like', 'keterangan_bengkak_seluruh_tubuh', $this->keterangan_bengkak_seluruh_tubuh])
            ->andFilterWhere(['like', 'urin_berdarah', $this->urin_berdarah])
            ->andFilterWhere(['like', 'keterangan_urin_berdarah', $this->keterangan_urin_berdarah])
            ->andFilterWhere(['like', 'penyakit_ginjal_laom', $this->penyakit_ginjal_laom])
            ->andFilterWhere(['like', 'keterangan_penyakit_ginjal_laom', $this->keterangan_penyakit_ginjal_laom])
            ->andFilterWhere(['like', 'penyakit_lain', $this->penyakit_lain])
            ->andFilterWhere(['like', 'keterangan_penyakit_lain', $this->keterangan_penyakit_lain])
            ->andFilterWhere(['like', 'konsumsi_obat_nefro', $this->konsumsi_obat_nefro])
            ->andFilterWhere(['like', 'keterangan_konsumsi_obat_nefro', $this->keterangan_konsumsi_obat_nefro])
            ->andFilterWhere(['like', 'pernah_cpad', $this->pernah_cpad])
            ->andFilterWhere(['like', 'pernah_transplantasi', $this->pernah_transplantasi])
            ->andFilterWhere(['like', 'keadaan_umum', $this->keadaan_umum])
            ->andFilterWhere(['like', 'kesadaran', $this->kesadaran])
            ->andFilterWhere(['like', 'nadi', $this->nadi])
            ->andFilterWhere(['like', 'bb', $this->bb])
            ->andFilterWhere(['like', 'td', $this->td])
            ->andFilterWhere(['like', 'suhu', $this->suhu])
            ->andFilterWhere(['like', 'napas', $this->napas])
            ->andFilterWhere(['like', 'tb', $this->tb])
            ->andFilterWhere(['like', 'hepatomegali', $this->hepatomegali])
            ->andFilterWhere(['like', 'splenomegali', $this->splenomegali])
            ->andFilterWhere(['like', 'ascites', $this->ascites])
            ->andFilterWhere(['like', 'edema', $this->edema])
            ->andFilterWhere(['like', 'whezzing', $this->whezzing])
            ->andFilterWhere(['like', 'ronchi', $this->ronchi])
            ->andFilterWhere(['like', 'ikterik', $this->ikterik])
            ->andFilterWhere(['like', 'tekanan_vena', $this->tekanan_vena])
            ->andFilterWhere(['like', 'anemia', $this->anemia])
            ->andFilterWhere(['like', 'kardiomegali', $this->kardiomegali])
            ->andFilterWhere(['like', 'bising', $this->bising])
            ->andFilterWhere(['like', 'thorax', $this->thorax])
            ->andFilterWhere(['like', 'ekg', $this->ekg])
            ->andFilterWhere(['like', 'bno', $this->bno])
            ->andFilterWhere(['like', 'usg', $this->usg])
            ->andFilterWhere(['like', 'renogram', $this->renogram])
            ->andFilterWhere(['like', 'biopsi', $this->biopsi])
            ->andFilterWhere(['like', 'ctscan', $this->ctscan])
            ->andFilterWhere(['like', 'arteriografi', $this->arteriografi])
            ->andFilterWhere(['like', 'kultur_urin', $this->kultur_urin])
            ->andFilterWhere(['like', 'laborat', $this->laborat])
            ->andFilterWhere(['like', 'hematokrit', $this->hematokrit])
            ->andFilterWhere(['like', 'hemoglobin', $this->hemoglobin])
            ->andFilterWhere(['like', 'leukosit', $this->leukosit])
            ->andFilterWhere(['like', 'trombosit', $this->trombosit])
            ->andFilterWhere(['like', 'hitung_jenis', $this->hitung_jenis])
            ->andFilterWhere(['like', 'ureum', $this->ureum])
            ->andFilterWhere(['like', 'urin_lengkap', $this->urin_lengkap])
            ->andFilterWhere(['like', 'kreatinin', $this->kreatinin])
            ->andFilterWhere(['like', 'cct', $this->cct])
            ->andFilterWhere(['like', 'sgot', $this->sgot])
            ->andFilterWhere(['like', 'sgpt', $this->sgpt])
            ->andFilterWhere(['like', 'ct', $this->ct])
            ->andFilterWhere(['like', 'asam_urat', $this->asam_urat])
            ->andFilterWhere(['like', 'hbsag', $this->hbsag])
            ->andFilterWhere(['like', 'anti_hcv', $this->anti_hcv])
            ->andFilterWhere(['like', 'edukasi', $this->edukasi]);

        return $dataProvider;
    }
}
