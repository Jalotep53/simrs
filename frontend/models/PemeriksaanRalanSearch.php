<?php

namespace frontend\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use frontend\models\PemeriksaanRalan;

/**
 * PemeriksaanRalanSearch represents the model behind the search form of `frontend\models\PemeriksaanRalan`.
 */
class PemeriksaanRalanSearch extends PemeriksaanRalan
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['no_rawat', 'tgl_perawatan', 'jam_rawat', 'suhu_tubuh', 'tensi', 'nadi', 'respirasi', 'tinggi', 'berat', 'spo2', 'gcs', 'kesadaran', 'keluhan', 'pemeriksaan', 'alergi', 'lingkar_perut', 'rtl', 'penilaian', 'instruksi', 'evaluasi', 'nip'], 'safe'],
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
        $query = PemeriksaanRalan::find();

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
            'tgl_perawatan' => $this->tgl_perawatan,
            'jam_rawat' => $this->jam_rawat,
        ]);

        $query->andFilterWhere(['like', 'no_rawat', $this->no_rawat])
            ->andFilterWhere(['like', 'suhu_tubuh', $this->suhu_tubuh])
            ->andFilterWhere(['like', 'tensi', $this->tensi])
            ->andFilterWhere(['like', 'nadi', $this->nadi])
            ->andFilterWhere(['like', 'respirasi', $this->respirasi])
            ->andFilterWhere(['like', 'tinggi', $this->tinggi])
            ->andFilterWhere(['like', 'berat', $this->berat])
            ->andFilterWhere(['like', 'spo2', $this->spo2])
            ->andFilterWhere(['like', 'gcs', $this->gcs])
            ->andFilterWhere(['like', 'kesadaran', $this->kesadaran])
            ->andFilterWhere(['like', 'keluhan', $this->keluhan])
            ->andFilterWhere(['like', 'pemeriksaan', $this->pemeriksaan])
            ->andFilterWhere(['like', 'alergi', $this->alergi])
            ->andFilterWhere(['like', 'lingkar_perut', $this->lingkar_perut])
            ->andFilterWhere(['like', 'rtl', $this->rtl])
            ->andFilterWhere(['like', 'penilaian', $this->penilaian])
            ->andFilterWhere(['like', 'instruksi', $this->instruksi])
            ->andFilterWhere(['like', 'evaluasi', $this->evaluasi])
            ->andFilterWhere(['like', 'nip', $this->nip]);

        return $dataProvider;
    }
}
