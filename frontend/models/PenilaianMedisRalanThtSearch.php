<?php

namespace frontend\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use frontend\models\PenilaianMedisRalanTht;

/**
 * PenilaianMedisRalanThtSearch represents the model behind the search form of `frontend\models\PenilaianMedisRalanTht`.
 */
class PenilaianMedisRalanThtSearch extends PenilaianMedisRalanTht
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['no_rawat', 'tanggal', 'kd_dokter', 'anamnesis', 'hubungan', 'keluhan_utama', 'rps', 'rpd', 'rpo', 'alergi', 'td', 'nadi', 'rr', 'suhu', 'bb', 'tb', 'nyeri', 'status_nutrisi', 'kondisi', 'ket_lokalis', 'lab', 'rad', 'tes_pendengaran', 'penunjang', 'diagnosis', 'diagnosisbanding', 'permasalahan', 'terapi', 'tindakan', 'tatalaksana', 'edukasi'], 'safe'],
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
        $query = PenilaianMedisRalanTht::find();

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
            ->andFilterWhere(['like', 'rpo', $this->rpo])
            ->andFilterWhere(['like', 'alergi', $this->alergi])
            ->andFilterWhere(['like', 'td', $this->td])
            ->andFilterWhere(['like', 'nadi', $this->nadi])
            ->andFilterWhere(['like', 'rr', $this->rr])
            ->andFilterWhere(['like', 'suhu', $this->suhu])
            ->andFilterWhere(['like', 'bb', $this->bb])
            ->andFilterWhere(['like', 'tb', $this->tb])
            ->andFilterWhere(['like', 'nyeri', $this->nyeri])
            ->andFilterWhere(['like', 'status_nutrisi', $this->status_nutrisi])
            ->andFilterWhere(['like', 'kondisi', $this->kondisi])
            ->andFilterWhere(['like', 'ket_lokalis', $this->ket_lokalis])
            ->andFilterWhere(['like', 'lab', $this->lab])
            ->andFilterWhere(['like', 'rad', $this->rad])
            ->andFilterWhere(['like', 'tes_pendengaran', $this->tes_pendengaran])
            ->andFilterWhere(['like', 'penunjang', $this->penunjang])
            ->andFilterWhere(['like', 'diagnosis', $this->diagnosis])
            ->andFilterWhere(['like', 'diagnosisbanding', $this->diagnosisbanding])
            ->andFilterWhere(['like', 'permasalahan', $this->permasalahan])
            ->andFilterWhere(['like', 'terapi', $this->terapi])
            ->andFilterWhere(['like', 'tindakan', $this->tindakan])
            ->andFilterWhere(['like', 'tatalaksana', $this->tatalaksana])
            ->andFilterWhere(['like', 'edukasi', $this->edukasi]);

        return $dataProvider;
    }
}
