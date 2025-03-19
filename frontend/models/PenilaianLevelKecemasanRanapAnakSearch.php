<?php

namespace frontend\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use frontend\models\PenilaianLevelKecemasanRanapAnak;

/**
 * PenilaianLevelKecemasanRanapAnakSearch represents the model behind the search form of `frontend\models\PenilaianLevelKecemasanRanapAnak`.
 */
class PenilaianLevelKecemasanRanapAnakSearch extends PenilaianLevelKecemasanRanapAnak
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['no_rawat', 'tanggal', 'keterangan_skor', 'nip'], 'safe'],
            [['cemas', 'firasat_buruk', 'takut_pikiran_sendiri', 'mudah_tersinggung', 'merasa_tegang', 'lesu', 'tak_bisa_istirahat_tenang', 'mudah_terkejut', 'mudah_menangis', 'gemetar', 'gelisah', 'takut_pada_gelap', 'takut_pada_orangasing', 'takut_pada_kerumunan_banyak_orang', 'takut_pada_binatang_besar', 'takut_pada_keramaian_lalu_lintas', 'takut_ditinggal_sendiri', 'sulit_tidur', 'terbangun_malam_hari', 'tidur_tidak_nyeyak', 'mimpi_buruk', 'bangun_dengan_lesu', 'banyak_mengalami_mimpi', 'mimpi_menakutkan', 'sulit_konsentrasi', 'daya_ingat_buruk', 'hilangnya_minat', 'berkurangnya_kesenangan_pada_hobi', 'sedih', 'bangun_dini_hari', 'perasaan_berubah', 'sakit_nyeri_di_otot', 'kaku', 'kedutan_otot', 'gigi_gemerutuk', 'suara_tidak_stabil', 'tinnitus', 'penglihatan_kabur', 'muka_merah_gejala_somatic', 'merasa_lemah', 'perasaan_ditusuk', 'takhikardia', 'berdebar', 'nyeri_di_dada', 'denyut_nadi_mengeras', 'perasaan_lesu', 'detak_jantung_menghilang', 'merasa_tertekan', 'perasaan_tercekik', 'sering_menarik_napas', 'napas_pendek', 'bulu_berdiri', 'sulit_menelan', 'perut_melilit', 'ganguan_pencernaan', 'rasa_kembung', 'nyeri_makan', 'terbakar_perut', 'sukar_bab', 'muntah', 'bab_lembek', 'kehilangan_bb', 'mual', 'sering_bak', 'tidak_bisa_menahan_kencing', 'menjadi_dingin', 'manorrhagia', 'amenorrhoea', 'ejakulasi_praecocks', 'ereksi_hilang', 'impotensi', 'mulut_kering', 'muka_merah_gejala_otonom', 'mudah_berkeringat', 'bulu_berdiri_gejala_otonom', 'sakit_kepala', 'gelisah_wawancara', 'napas_pendek_wawancara', 'jari_gemetar', 'kerut_kening', 'muka_tegang', 'tonus_meningkat', 'tidak_tenang', 'muka_merah_wawancara', 'total_skor'], 'integer'],
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
        $query = PenilaianLevelKecemasanRanapAnak::find();

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
            'cemas' => $this->cemas,
            'firasat_buruk' => $this->firasat_buruk,
            'takut_pikiran_sendiri' => $this->takut_pikiran_sendiri,
            'mudah_tersinggung' => $this->mudah_tersinggung,
            'merasa_tegang' => $this->merasa_tegang,
            'lesu' => $this->lesu,
            'tak_bisa_istirahat_tenang' => $this->tak_bisa_istirahat_tenang,
            'mudah_terkejut' => $this->mudah_terkejut,
            'mudah_menangis' => $this->mudah_menangis,
            'gemetar' => $this->gemetar,
            'gelisah' => $this->gelisah,
            'takut_pada_gelap' => $this->takut_pada_gelap,
            'takut_pada_orangasing' => $this->takut_pada_orangasing,
            'takut_pada_kerumunan_banyak_orang' => $this->takut_pada_kerumunan_banyak_orang,
            'takut_pada_binatang_besar' => $this->takut_pada_binatang_besar,
            'takut_pada_keramaian_lalu_lintas' => $this->takut_pada_keramaian_lalu_lintas,
            'takut_ditinggal_sendiri' => $this->takut_ditinggal_sendiri,
            'sulit_tidur' => $this->sulit_tidur,
            'terbangun_malam_hari' => $this->terbangun_malam_hari,
            'tidur_tidak_nyeyak' => $this->tidur_tidak_nyeyak,
            'mimpi_buruk' => $this->mimpi_buruk,
            'bangun_dengan_lesu' => $this->bangun_dengan_lesu,
            'banyak_mengalami_mimpi' => $this->banyak_mengalami_mimpi,
            'mimpi_menakutkan' => $this->mimpi_menakutkan,
            'sulit_konsentrasi' => $this->sulit_konsentrasi,
            'daya_ingat_buruk' => $this->daya_ingat_buruk,
            'hilangnya_minat' => $this->hilangnya_minat,
            'berkurangnya_kesenangan_pada_hobi' => $this->berkurangnya_kesenangan_pada_hobi,
            'sedih' => $this->sedih,
            'bangun_dini_hari' => $this->bangun_dini_hari,
            'perasaan_berubah' => $this->perasaan_berubah,
            'sakit_nyeri_di_otot' => $this->sakit_nyeri_di_otot,
            'kaku' => $this->kaku,
            'kedutan_otot' => $this->kedutan_otot,
            'gigi_gemerutuk' => $this->gigi_gemerutuk,
            'suara_tidak_stabil' => $this->suara_tidak_stabil,
            'tinnitus' => $this->tinnitus,
            'penglihatan_kabur' => $this->penglihatan_kabur,
            'muka_merah_gejala_somatic' => $this->muka_merah_gejala_somatic,
            'merasa_lemah' => $this->merasa_lemah,
            'perasaan_ditusuk' => $this->perasaan_ditusuk,
            'takhikardia' => $this->takhikardia,
            'berdebar' => $this->berdebar,
            'nyeri_di_dada' => $this->nyeri_di_dada,
            'denyut_nadi_mengeras' => $this->denyut_nadi_mengeras,
            'perasaan_lesu' => $this->perasaan_lesu,
            'detak_jantung_menghilang' => $this->detak_jantung_menghilang,
            'merasa_tertekan' => $this->merasa_tertekan,
            'perasaan_tercekik' => $this->perasaan_tercekik,
            'sering_menarik_napas' => $this->sering_menarik_napas,
            'napas_pendek' => $this->napas_pendek,
            'bulu_berdiri' => $this->bulu_berdiri,
            'sulit_menelan' => $this->sulit_menelan,
            'perut_melilit' => $this->perut_melilit,
            'ganguan_pencernaan' => $this->ganguan_pencernaan,
            'rasa_kembung' => $this->rasa_kembung,
            'nyeri_makan' => $this->nyeri_makan,
            'terbakar_perut' => $this->terbakar_perut,
            'sukar_bab' => $this->sukar_bab,
            'muntah' => $this->muntah,
            'bab_lembek' => $this->bab_lembek,
            'kehilangan_bb' => $this->kehilangan_bb,
            'mual' => $this->mual,
            'sering_bak' => $this->sering_bak,
            'tidak_bisa_menahan_kencing' => $this->tidak_bisa_menahan_kencing,
            'menjadi_dingin' => $this->menjadi_dingin,
            'manorrhagia' => $this->manorrhagia,
            'amenorrhoea' => $this->amenorrhoea,
            'ejakulasi_praecocks' => $this->ejakulasi_praecocks,
            'ereksi_hilang' => $this->ereksi_hilang,
            'impotensi' => $this->impotensi,
            'mulut_kering' => $this->mulut_kering,
            'muka_merah_gejala_otonom' => $this->muka_merah_gejala_otonom,
            'mudah_berkeringat' => $this->mudah_berkeringat,
            'bulu_berdiri_gejala_otonom' => $this->bulu_berdiri_gejala_otonom,
            'sakit_kepala' => $this->sakit_kepala,
            'gelisah_wawancara' => $this->gelisah_wawancara,
            'napas_pendek_wawancara' => $this->napas_pendek_wawancara,
            'jari_gemetar' => $this->jari_gemetar,
            'kerut_kening' => $this->kerut_kening,
            'muka_tegang' => $this->muka_tegang,
            'tonus_meningkat' => $this->tonus_meningkat,
            'tidak_tenang' => $this->tidak_tenang,
            'muka_merah_wawancara' => $this->muka_merah_wawancara,
            'total_skor' => $this->total_skor,
        ]);

        $query->andFilterWhere(['like', 'no_rawat', $this->no_rawat])
            ->andFilterWhere(['like', 'keterangan_skor', $this->keterangan_skor])
            ->andFilterWhere(['like', 'nip', $this->nip]);

        return $dataProvider;
    }
}
