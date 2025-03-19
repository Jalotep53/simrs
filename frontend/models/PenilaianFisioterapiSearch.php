<?php

namespace frontend\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use frontend\models\PenilaianFisioterapi;

/**
 * PenilaianFisioterapiSearch represents the model behind the search form of `frontend\models\PenilaianFisioterapi`.
 */
class PenilaianFisioterapiSearch extends PenilaianFisioterapi
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['no_rawat', 'tanggal', 'informasi', 'keluhan_utama', 'rps', 'rpd', 'td', 'hr', 'rr', 'suhu', 'nyeri_tekan', 'nyeri_gerak', 'nyeri_diam', 'palpasi', 'luas_gerak_sendi', 'kekuatan_otot', 'statis', 'dinamis', 'kognitif', 'auskultasi', 'alat_bantu', 'ket_bantu', 'prothesa', 'ket_pro', 'deformitas', 'ket_deformitas', 'resikojatuh', 'ket_resikojatuh', 'adl', 'lainlain_fungsional', 'ket_fisik', 'pemeriksaan_musculoskeletal', 'pemeriksaan_neuromuscular', 'pemeriksaan_cardiopulmonal', 'pemeriksaan_integument', 'pengukuran_musculoskeletal', 'pengukuran_neuromuscular', 'pengukuran_cardiopulmonal', 'pengukuran_integument', 'penunjang', 'diagnosis_fisio', 'rencana_terapi', 'nip'], 'safe'],
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
        $query = PenilaianFisioterapi::find();

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
            ->andFilterWhere(['like', 'informasi', $this->informasi])
            ->andFilterWhere(['like', 'keluhan_utama', $this->keluhan_utama])
            ->andFilterWhere(['like', 'rps', $this->rps])
            ->andFilterWhere(['like', 'rpd', $this->rpd])
            ->andFilterWhere(['like', 'td', $this->td])
            ->andFilterWhere(['like', 'hr', $this->hr])
            ->andFilterWhere(['like', 'rr', $this->rr])
            ->andFilterWhere(['like', 'suhu', $this->suhu])
            ->andFilterWhere(['like', 'nyeri_tekan', $this->nyeri_tekan])
            ->andFilterWhere(['like', 'nyeri_gerak', $this->nyeri_gerak])
            ->andFilterWhere(['like', 'nyeri_diam', $this->nyeri_diam])
            ->andFilterWhere(['like', 'palpasi', $this->palpasi])
            ->andFilterWhere(['like', 'luas_gerak_sendi', $this->luas_gerak_sendi])
            ->andFilterWhere(['like', 'kekuatan_otot', $this->kekuatan_otot])
            ->andFilterWhere(['like', 'statis', $this->statis])
            ->andFilterWhere(['like', 'dinamis', $this->dinamis])
            ->andFilterWhere(['like', 'kognitif', $this->kognitif])
            ->andFilterWhere(['like', 'auskultasi', $this->auskultasi])
            ->andFilterWhere(['like', 'alat_bantu', $this->alat_bantu])
            ->andFilterWhere(['like', 'ket_bantu', $this->ket_bantu])
            ->andFilterWhere(['like', 'prothesa', $this->prothesa])
            ->andFilterWhere(['like', 'ket_pro', $this->ket_pro])
            ->andFilterWhere(['like', 'deformitas', $this->deformitas])
            ->andFilterWhere(['like', 'ket_deformitas', $this->ket_deformitas])
            ->andFilterWhere(['like', 'resikojatuh', $this->resikojatuh])
            ->andFilterWhere(['like', 'ket_resikojatuh', $this->ket_resikojatuh])
            ->andFilterWhere(['like', 'adl', $this->adl])
            ->andFilterWhere(['like', 'lainlain_fungsional', $this->lainlain_fungsional])
            ->andFilterWhere(['like', 'ket_fisik', $this->ket_fisik])
            ->andFilterWhere(['like', 'pemeriksaan_musculoskeletal', $this->pemeriksaan_musculoskeletal])
            ->andFilterWhere(['like', 'pemeriksaan_neuromuscular', $this->pemeriksaan_neuromuscular])
            ->andFilterWhere(['like', 'pemeriksaan_cardiopulmonal', $this->pemeriksaan_cardiopulmonal])
            ->andFilterWhere(['like', 'pemeriksaan_integument', $this->pemeriksaan_integument])
            ->andFilterWhere(['like', 'pengukuran_musculoskeletal', $this->pengukuran_musculoskeletal])
            ->andFilterWhere(['like', 'pengukuran_neuromuscular', $this->pengukuran_neuromuscular])
            ->andFilterWhere(['like', 'pengukuran_cardiopulmonal', $this->pengukuran_cardiopulmonal])
            ->andFilterWhere(['like', 'pengukuran_integument', $this->pengukuran_integument])
            ->andFilterWhere(['like', 'penunjang', $this->penunjang])
            ->andFilterWhere(['like', 'diagnosis_fisio', $this->diagnosis_fisio])
            ->andFilterWhere(['like', 'rencana_terapi', $this->rencana_terapi])
            ->andFilterWhere(['like', 'nip', $this->nip]);

        return $dataProvider;
    }
}
