<?php

namespace frontend\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use frontend\models\PenilaianMedisRanapKandungan;

/**
 * PenilaianMedisRanapKandunganSearch represents the model behind the search form of `frontend\models\PenilaianMedisRanapKandungan`.
 */
class PenilaianMedisRanapKandunganSearch extends PenilaianMedisRanapKandungan
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['no_rawat', 'tanggal', 'kd_dokter', 'anamnesis', 'hubungan', 'keluhan_utama', 'rps', 'rpd', 'rpk', 'rpo', 'alergi', 'keadaan', 'gcs', 'kesadaran', 'td', 'nadi', 'rr', 'suhu', 'spo', 'bb', 'tb', 'kepala', 'mata', 'gigi', 'tht', 'thoraks', 'jantung', 'paru', 'abdomen', 'genital', 'ekstremitas', 'kulit', 'ket_fisik', 'tfu', 'tbj', 'his', 'kontraksi', 'djj', 'inspeksi', 'inspekulo', 'vt', 'rt', 'ultra', 'kardio', 'lab', 'diagnosis', 'tata', 'edukasi'], 'safe'],
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
        $query = PenilaianMedisRanapKandungan::find();

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
            ->andFilterWhere(['like', 'anamnesis', $this->anamnesis])
            ->andFilterWhere(['like', 'hubungan', $this->hubungan])
            ->andFilterWhere(['like', 'keluhan_utama', $this->keluhan_utama])
            ->andFilterWhere(['like', 'rps', $this->rps])
            ->andFilterWhere(['like', 'rpd', $this->rpd])
            ->andFilterWhere(['like', 'rpk', $this->rpk])
            ->andFilterWhere(['like', 'rpo', $this->rpo])
            ->andFilterWhere(['like', 'alergi', $this->alergi])
            ->andFilterWhere(['like', 'keadaan', $this->keadaan])
            ->andFilterWhere(['like', 'gcs', $this->gcs])
            ->andFilterWhere(['like', 'kesadaran', $this->kesadaran])
            ->andFilterWhere(['like', 'td', $this->td])
            ->andFilterWhere(['like', 'nadi', $this->nadi])
            ->andFilterWhere(['like', 'rr', $this->rr])
            ->andFilterWhere(['like', 'suhu', $this->suhu])
            ->andFilterWhere(['like', 'spo', $this->spo])
            ->andFilterWhere(['like', 'bb', $this->bb])
            ->andFilterWhere(['like', 'tb', $this->tb])
            ->andFilterWhere(['like', 'kepala', $this->kepala])
            ->andFilterWhere(['like', 'mata', $this->mata])
            ->andFilterWhere(['like', 'gigi', $this->gigi])
            ->andFilterWhere(['like', 'tht', $this->tht])
            ->andFilterWhere(['like', 'thoraks', $this->thoraks])
            ->andFilterWhere(['like', 'jantung', $this->jantung])
            ->andFilterWhere(['like', 'paru', $this->paru])
            ->andFilterWhere(['like', 'abdomen', $this->abdomen])
            ->andFilterWhere(['like', 'genital', $this->genital])
            ->andFilterWhere(['like', 'ekstremitas', $this->ekstremitas])
            ->andFilterWhere(['like', 'kulit', $this->kulit])
            ->andFilterWhere(['like', 'ket_fisik', $this->ket_fisik])
            ->andFilterWhere(['like', 'tfu', $this->tfu])
            ->andFilterWhere(['like', 'tbj', $this->tbj])
            ->andFilterWhere(['like', 'his', $this->his])
            ->andFilterWhere(['like', 'kontraksi', $this->kontraksi])
            ->andFilterWhere(['like', 'djj', $this->djj])
            ->andFilterWhere(['like', 'inspeksi', $this->inspeksi])
            ->andFilterWhere(['like', 'inspekulo', $this->inspekulo])
            ->andFilterWhere(['like', 'vt', $this->vt])
            ->andFilterWhere(['like', 'rt', $this->rt])
            ->andFilterWhere(['like', 'ultra', $this->ultra])
            ->andFilterWhere(['like', 'kardio', $this->kardio])
            ->andFilterWhere(['like', 'lab', $this->lab])
            ->andFilterWhere(['like', 'diagnosis', $this->diagnosis])
            ->andFilterWhere(['like', 'tata', $this->tata])
            ->andFilterWhere(['like', 'edukasi', $this->edukasi]);

        return $dataProvider;
    }
}
