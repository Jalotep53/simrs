<?php

namespace frontend\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use frontend\models\PenilaianTambahanGeriatri;

/**
 * PenilaianTambahanGeriatriSearch represents the model behind the search form of `frontend\models\PenilaianTambahanGeriatri`.
 */
class PenilaianTambahanGeriatriSearch extends PenilaianTambahanGeriatri
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['no_rawat', 'tanggal', 'nik', 'asal_masuk', 'kondisi_masuk', 'keterangan_kondisi_masuk', 'anamnesis', 'diagnosa_medis', 'riwayat_immuno_telinga', 'riwayat_immuno_sinus', 'riwayat_immuno_antibiotik', 'riwayat_immuno_pneumonia', 'riwayat_immuno_abses', 'riwayat_immuno_sariawan', 'riwayat_immuno_memerlukan_antibiotik', 'riwayat_immuno_infeksi_dalam', 'riwayat_immuno_immunodefisiensi_primer', 'riwayat_immuno_jenis_kangker', 'riwayat_immuno_infeksi_oportunistik', 'pola_aktifitas_tidur', 'keterangan_pola_aktifitas_tidur', 'pola_aktifitas_obat_tidur', 'keterangan_pola_aktifitas_obat_tidur', 'pola_aktifitas_olahraga', 'keterangan_pola_aktifitas_olahraga', 'kualitas_hidup_mobilitas', 'kualitas_hidup_perawatan_diri', 'kualitas_hidup_aktifitas_seharihari', 'kualitas_hidup_rasa_nyeri', 'skala_nyeri'], 'safe'],
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
        $query = PenilaianTambahanGeriatri::find();

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
            ->andFilterWhere(['like', 'nik', $this->nik])
            ->andFilterWhere(['like', 'asal_masuk', $this->asal_masuk])
            ->andFilterWhere(['like', 'kondisi_masuk', $this->kondisi_masuk])
            ->andFilterWhere(['like', 'keterangan_kondisi_masuk', $this->keterangan_kondisi_masuk])
            ->andFilterWhere(['like', 'anamnesis', $this->anamnesis])
            ->andFilterWhere(['like', 'diagnosa_medis', $this->diagnosa_medis])
            ->andFilterWhere(['like', 'riwayat_immuno_telinga', $this->riwayat_immuno_telinga])
            ->andFilterWhere(['like', 'riwayat_immuno_sinus', $this->riwayat_immuno_sinus])
            ->andFilterWhere(['like', 'riwayat_immuno_antibiotik', $this->riwayat_immuno_antibiotik])
            ->andFilterWhere(['like', 'riwayat_immuno_pneumonia', $this->riwayat_immuno_pneumonia])
            ->andFilterWhere(['like', 'riwayat_immuno_abses', $this->riwayat_immuno_abses])
            ->andFilterWhere(['like', 'riwayat_immuno_sariawan', $this->riwayat_immuno_sariawan])
            ->andFilterWhere(['like', 'riwayat_immuno_memerlukan_antibiotik', $this->riwayat_immuno_memerlukan_antibiotik])
            ->andFilterWhere(['like', 'riwayat_immuno_infeksi_dalam', $this->riwayat_immuno_infeksi_dalam])
            ->andFilterWhere(['like', 'riwayat_immuno_immunodefisiensi_primer', $this->riwayat_immuno_immunodefisiensi_primer])
            ->andFilterWhere(['like', 'riwayat_immuno_jenis_kangker', $this->riwayat_immuno_jenis_kangker])
            ->andFilterWhere(['like', 'riwayat_immuno_infeksi_oportunistik', $this->riwayat_immuno_infeksi_oportunistik])
            ->andFilterWhere(['like', 'pola_aktifitas_tidur', $this->pola_aktifitas_tidur])
            ->andFilterWhere(['like', 'keterangan_pola_aktifitas_tidur', $this->keterangan_pola_aktifitas_tidur])
            ->andFilterWhere(['like', 'pola_aktifitas_obat_tidur', $this->pola_aktifitas_obat_tidur])
            ->andFilterWhere(['like', 'keterangan_pola_aktifitas_obat_tidur', $this->keterangan_pola_aktifitas_obat_tidur])
            ->andFilterWhere(['like', 'pola_aktifitas_olahraga', $this->pola_aktifitas_olahraga])
            ->andFilterWhere(['like', 'keterangan_pola_aktifitas_olahraga', $this->keterangan_pola_aktifitas_olahraga])
            ->andFilterWhere(['like', 'kualitas_hidup_mobilitas', $this->kualitas_hidup_mobilitas])
            ->andFilterWhere(['like', 'kualitas_hidup_perawatan_diri', $this->kualitas_hidup_perawatan_diri])
            ->andFilterWhere(['like', 'kualitas_hidup_aktifitas_seharihari', $this->kualitas_hidup_aktifitas_seharihari])
            ->andFilterWhere(['like', 'kualitas_hidup_rasa_nyeri', $this->kualitas_hidup_rasa_nyeri])
            ->andFilterWhere(['like', 'skala_nyeri', $this->skala_nyeri]);

        return $dataProvider;
    }
}
