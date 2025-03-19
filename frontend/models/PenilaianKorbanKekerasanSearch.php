<?php

namespace frontend\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use frontend\models\PenilaianKorbanKekerasan;

/**
 * PenilaianKorbanKekerasanSearch represents the model behind the search form of `frontend\models\PenilaianKorbanKekerasan`.
 */
class PenilaianKorbanKekerasanSearch extends PenilaianKorbanKekerasan
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['no_rawat', 'tanggal', 'informasi', 'hubungan_dengan_pasien', 'jumlah_saudara', 'kondisi_keluaga', 'hubungan_orang_terdekat', 'kekerasan_yang_dialami', 'tempat_kejadian', 'periode_kekerasan', 'seberapa_sering_mengalami', 'pemicu_kekerasan', 'yang_melakukan_kekerasan', 'dampak_kekerasan', 'tanda_tanda_didapatkan', 'memerlukan_pendampingan', 'riwayat_kelainan', 'pemeriksaan_kepala', 'pemeriksaan_thoraks', 'pemeriksaan_leher', 'pemeriksaan_abdomen', 'pemeriksaan_genitalia', 'pemeriksaan_ekstrimitas_atas', 'pemeriksaan_ekstrimitas_bawah', 'pemeriksaan_anus', 'nip'], 'safe'],
            [['lama_kekerasan'], 'integer'],
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
        $query = PenilaianKorbanKekerasan::find();

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
            'lama_kekerasan' => $this->lama_kekerasan,
        ]);

        $query->andFilterWhere(['like', 'no_rawat', $this->no_rawat])
            ->andFilterWhere(['like', 'informasi', $this->informasi])
            ->andFilterWhere(['like', 'hubungan_dengan_pasien', $this->hubungan_dengan_pasien])
            ->andFilterWhere(['like', 'jumlah_saudara', $this->jumlah_saudara])
            ->andFilterWhere(['like', 'kondisi_keluaga', $this->kondisi_keluaga])
            ->andFilterWhere(['like', 'hubungan_orang_terdekat', $this->hubungan_orang_terdekat])
            ->andFilterWhere(['like', 'kekerasan_yang_dialami', $this->kekerasan_yang_dialami])
            ->andFilterWhere(['like', 'tempat_kejadian', $this->tempat_kejadian])
            ->andFilterWhere(['like', 'periode_kekerasan', $this->periode_kekerasan])
            ->andFilterWhere(['like', 'seberapa_sering_mengalami', $this->seberapa_sering_mengalami])
            ->andFilterWhere(['like', 'pemicu_kekerasan', $this->pemicu_kekerasan])
            ->andFilterWhere(['like', 'yang_melakukan_kekerasan', $this->yang_melakukan_kekerasan])
            ->andFilterWhere(['like', 'dampak_kekerasan', $this->dampak_kekerasan])
            ->andFilterWhere(['like', 'tanda_tanda_didapatkan', $this->tanda_tanda_didapatkan])
            ->andFilterWhere(['like', 'memerlukan_pendampingan', $this->memerlukan_pendampingan])
            ->andFilterWhere(['like', 'riwayat_kelainan', $this->riwayat_kelainan])
            ->andFilterWhere(['like', 'pemeriksaan_kepala', $this->pemeriksaan_kepala])
            ->andFilterWhere(['like', 'pemeriksaan_thoraks', $this->pemeriksaan_thoraks])
            ->andFilterWhere(['like', 'pemeriksaan_leher', $this->pemeriksaan_leher])
            ->andFilterWhere(['like', 'pemeriksaan_abdomen', $this->pemeriksaan_abdomen])
            ->andFilterWhere(['like', 'pemeriksaan_genitalia', $this->pemeriksaan_genitalia])
            ->andFilterWhere(['like', 'pemeriksaan_ekstrimitas_atas', $this->pemeriksaan_ekstrimitas_atas])
            ->andFilterWhere(['like', 'pemeriksaan_ekstrimitas_bawah', $this->pemeriksaan_ekstrimitas_bawah])
            ->andFilterWhere(['like', 'pemeriksaan_anus', $this->pemeriksaan_anus])
            ->andFilterWhere(['like', 'nip', $this->nip]);

        return $dataProvider;
    }
}
