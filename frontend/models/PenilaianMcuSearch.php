<?php

namespace frontend\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use frontend\models\PenilaianMcu;

/**
 * PenilaianMcuSearch represents the model behind the search form of `frontend\models\PenilaianMcu`.
 */
class PenilaianMcuSearch extends PenilaianMcu
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['no_rawat', 'tanggal', 'kd_dokter', 'informasi', 'rps', 'rpk', 'rpd', 'alergi', 'keadaan', 'kesadaran', 'td', 'nadi', 'rr', 'tb', 'bb', 'suhu', 'submandibula', 'axilla', 'supraklavikula', 'leher', 'inguinal', 'oedema', 'sinus_frontalis', 'sinus_maxilaris', 'palpebra', 'sklera', 'cornea', 'buta_warna', 'konjungtiva', 'lensa', 'pupil', 'lubang_telinga', 'daun_telinga', 'selaput_pendengaran', 'proc_mastoideus', 'septum_nasi', 'lubang_hidung', 'bibir', 'caries', 'lidah', 'faring', 'tonsil', 'kelenjar_limfe', 'kelenjar_gondok', 'gerakan_dada', 'vocal_femitus', 'perkusi_dada', 'bunyi_napas', 'bunyi_tambahan', 'ictus_cordis', 'bunyi_jantung', 'batas', 'inspeksi', 'palpasi', 'hepar', 'perkusi_abdomen', 'auskultasi', 'limpa', 'costovertebral', 'kondisi_kulit', 'ekstrimitas_atas', 'ekstrimitas_atas_ket', 'ekstrimitas_bawah', 'ekstrimitas_bawah_ket', 'laborat', 'radiologi', 'ekg', 'spirometri', 'audiometri', 'treadmill', 'lainlain', 'merokok', 'alkohol', 'kesimpulan', 'anjuran'], 'safe'],
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
        $query = PenilaianMcu::find();

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
            ->andFilterWhere(['like', 'informasi', $this->informasi])
            ->andFilterWhere(['like', 'rps', $this->rps])
            ->andFilterWhere(['like', 'rpk', $this->rpk])
            ->andFilterWhere(['like', 'rpd', $this->rpd])
            ->andFilterWhere(['like', 'alergi', $this->alergi])
            ->andFilterWhere(['like', 'keadaan', $this->keadaan])
            ->andFilterWhere(['like', 'kesadaran', $this->kesadaran])
            ->andFilterWhere(['like', 'td', $this->td])
            ->andFilterWhere(['like', 'nadi', $this->nadi])
            ->andFilterWhere(['like', 'rr', $this->rr])
            ->andFilterWhere(['like', 'tb', $this->tb])
            ->andFilterWhere(['like', 'bb', $this->bb])
            ->andFilterWhere(['like', 'suhu', $this->suhu])
            ->andFilterWhere(['like', 'submandibula', $this->submandibula])
            ->andFilterWhere(['like', 'axilla', $this->axilla])
            ->andFilterWhere(['like', 'supraklavikula', $this->supraklavikula])
            ->andFilterWhere(['like', 'leher', $this->leher])
            ->andFilterWhere(['like', 'inguinal', $this->inguinal])
            ->andFilterWhere(['like', 'oedema', $this->oedema])
            ->andFilterWhere(['like', 'sinus_frontalis', $this->sinus_frontalis])
            ->andFilterWhere(['like', 'sinus_maxilaris', $this->sinus_maxilaris])
            ->andFilterWhere(['like', 'palpebra', $this->palpebra])
            ->andFilterWhere(['like', 'sklera', $this->sklera])
            ->andFilterWhere(['like', 'cornea', $this->cornea])
            ->andFilterWhere(['like', 'buta_warna', $this->buta_warna])
            ->andFilterWhere(['like', 'konjungtiva', $this->konjungtiva])
            ->andFilterWhere(['like', 'lensa', $this->lensa])
            ->andFilterWhere(['like', 'pupil', $this->pupil])
            ->andFilterWhere(['like', 'lubang_telinga', $this->lubang_telinga])
            ->andFilterWhere(['like', 'daun_telinga', $this->daun_telinga])
            ->andFilterWhere(['like', 'selaput_pendengaran', $this->selaput_pendengaran])
            ->andFilterWhere(['like', 'proc_mastoideus', $this->proc_mastoideus])
            ->andFilterWhere(['like', 'septum_nasi', $this->septum_nasi])
            ->andFilterWhere(['like', 'lubang_hidung', $this->lubang_hidung])
            ->andFilterWhere(['like', 'bibir', $this->bibir])
            ->andFilterWhere(['like', 'caries', $this->caries])
            ->andFilterWhere(['like', 'lidah', $this->lidah])
            ->andFilterWhere(['like', 'faring', $this->faring])
            ->andFilterWhere(['like', 'tonsil', $this->tonsil])
            ->andFilterWhere(['like', 'kelenjar_limfe', $this->kelenjar_limfe])
            ->andFilterWhere(['like', 'kelenjar_gondok', $this->kelenjar_gondok])
            ->andFilterWhere(['like', 'gerakan_dada', $this->gerakan_dada])
            ->andFilterWhere(['like', 'vocal_femitus', $this->vocal_femitus])
            ->andFilterWhere(['like', 'perkusi_dada', $this->perkusi_dada])
            ->andFilterWhere(['like', 'bunyi_napas', $this->bunyi_napas])
            ->andFilterWhere(['like', 'bunyi_tambahan', $this->bunyi_tambahan])
            ->andFilterWhere(['like', 'ictus_cordis', $this->ictus_cordis])
            ->andFilterWhere(['like', 'bunyi_jantung', $this->bunyi_jantung])
            ->andFilterWhere(['like', 'batas', $this->batas])
            ->andFilterWhere(['like', 'inspeksi', $this->inspeksi])
            ->andFilterWhere(['like', 'palpasi', $this->palpasi])
            ->andFilterWhere(['like', 'hepar', $this->hepar])
            ->andFilterWhere(['like', 'perkusi_abdomen', $this->perkusi_abdomen])
            ->andFilterWhere(['like', 'auskultasi', $this->auskultasi])
            ->andFilterWhere(['like', 'limpa', $this->limpa])
            ->andFilterWhere(['like', 'costovertebral', $this->costovertebral])
            ->andFilterWhere(['like', 'kondisi_kulit', $this->kondisi_kulit])
            ->andFilterWhere(['like', 'ekstrimitas_atas', $this->ekstrimitas_atas])
            ->andFilterWhere(['like', 'ekstrimitas_atas_ket', $this->ekstrimitas_atas_ket])
            ->andFilterWhere(['like', 'ekstrimitas_bawah', $this->ekstrimitas_bawah])
            ->andFilterWhere(['like', 'ekstrimitas_bawah_ket', $this->ekstrimitas_bawah_ket])
            ->andFilterWhere(['like', 'laborat', $this->laborat])
            ->andFilterWhere(['like', 'radiologi', $this->radiologi])
            ->andFilterWhere(['like', 'ekg', $this->ekg])
            ->andFilterWhere(['like', 'spirometri', $this->spirometri])
            ->andFilterWhere(['like', 'audiometri', $this->audiometri])
            ->andFilterWhere(['like', 'treadmill', $this->treadmill])
            ->andFilterWhere(['like', 'lainlain', $this->lainlain])
            ->andFilterWhere(['like', 'merokok', $this->merokok])
            ->andFilterWhere(['like', 'alkohol', $this->alkohol])
            ->andFilterWhere(['like', 'kesimpulan', $this->kesimpulan])
            ->andFilterWhere(['like', 'anjuran', $this->anjuran]);

        return $dataProvider;
    }
}
