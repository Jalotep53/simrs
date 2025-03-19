<?php

namespace frontend\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use frontend\models\PemeriksaanGinekologiRanap;

/**
 * PemeriksaanGinekologiRanapSearch represents the model behind the search form of `frontend\models\PemeriksaanGinekologiRanap`.
 */
class PemeriksaanGinekologiRanapSearch extends PemeriksaanGinekologiRanap
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['no_rawat', 'tgl_perawatan', 'jam_rawat', 'inspeksi', 'inspeksi_vulva', 'inspekulo_gine', 'fluxus_gine', 'fluor_gine', 'vulva_inspekulo', 'portio_inspekulo', 'sondage', 'portio_dalam', 'bentuk', 'cavum_uteri', 'mobilitas', 'ukuran', 'nyeri_tekan', 'adnexa_kanan', 'adnexa_kiri', 'cavum_douglas'], 'safe'],
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
        $query = PemeriksaanGinekologiRanap::find();

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
            ->andFilterWhere(['like', 'inspeksi', $this->inspeksi])
            ->andFilterWhere(['like', 'inspeksi_vulva', $this->inspeksi_vulva])
            ->andFilterWhere(['like', 'inspekulo_gine', $this->inspekulo_gine])
            ->andFilterWhere(['like', 'fluxus_gine', $this->fluxus_gine])
            ->andFilterWhere(['like', 'fluor_gine', $this->fluor_gine])
            ->andFilterWhere(['like', 'vulva_inspekulo', $this->vulva_inspekulo])
            ->andFilterWhere(['like', 'portio_inspekulo', $this->portio_inspekulo])
            ->andFilterWhere(['like', 'sondage', $this->sondage])
            ->andFilterWhere(['like', 'portio_dalam', $this->portio_dalam])
            ->andFilterWhere(['like', 'bentuk', $this->bentuk])
            ->andFilterWhere(['like', 'cavum_uteri', $this->cavum_uteri])
            ->andFilterWhere(['like', 'mobilitas', $this->mobilitas])
            ->andFilterWhere(['like', 'ukuran', $this->ukuran])
            ->andFilterWhere(['like', 'nyeri_tekan', $this->nyeri_tekan])
            ->andFilterWhere(['like', 'adnexa_kanan', $this->adnexa_kanan])
            ->andFilterWhere(['like', 'adnexa_kiri', $this->adnexa_kiri])
            ->andFilterWhere(['like', 'cavum_douglas', $this->cavum_douglas]);

        return $dataProvider;
    }
}
