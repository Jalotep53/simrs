<?php

namespace frontend\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use frontend\models\PenilaianMedisRalanAnak;

/**
 * PenilaianMedisRalanAnakSearch represents the model behind the search form of `frontend\models\PenilaianMedisRalanAnak`.
 */
class PenilaianMedisRalanAnakSearch extends PenilaianMedisRalanAnak
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['no_rawat', 'tanggal', 'kd_dokter', 'anamnesis', 'hubungan', 'keluhan_utama', 'rps', 'rpd', 'rpk', 'rpo', 'alergi', 'keadaan', 'gcs', 'kesadaran', 'td', 'nadi', 'rr', 'suhu', 'spo', 'bb', 'tb', 'kepala', 'mata', 'gigi', 'tht', 'thoraks', 'abdomen', 'genital', 'ekstremitas', 'kulit', 'ket_fisik', 'ket_lokalis', 'penunjang', 'diagnosis', 'tata', 'konsul'], 'safe'],
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
        $query = PenilaianMedisRalanAnak::find();

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
            ->andFilterWhere(['like', 'abdomen', $this->abdomen])
            ->andFilterWhere(['like', 'genital', $this->genital])
            ->andFilterWhere(['like', 'ekstremitas', $this->ekstremitas])
            ->andFilterWhere(['like', 'kulit', $this->kulit])
            ->andFilterWhere(['like', 'ket_fisik', $this->ket_fisik])
            ->andFilterWhere(['like', 'ket_lokalis', $this->ket_lokalis])
            ->andFilterWhere(['like', 'penunjang', $this->penunjang])
            ->andFilterWhere(['like', 'diagnosis', $this->diagnosis])
            ->andFilterWhere(['like', 'tata', $this->tata])
            ->andFilterWhere(['like', 'konsul', $this->konsul]);

        return $dataProvider;
    }
}
