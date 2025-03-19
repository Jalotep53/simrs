<?php

namespace frontend\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use frontend\models\HasilPemeriksaanUsg;

/**
 * HasilPemeriksaanUsgSearch represents the model behind the search form of `frontend\models\HasilPemeriksaanUsg`.
 */
class HasilPemeriksaanUsgSearch extends HasilPemeriksaanUsg
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['no_rawat', 'tanggal', 'kd_dokter', 'diagnosa_klinis', 'kiriman_dari', 'hta', 'kantong_gestasi', 'ukuran_bokongkepala', 'jenis_prestasi', 'diameter_biparietal', 'panjang_femur', 'lingkar_abdomen', 'tafsiran_berat_janin', 'usia_kehamilan', 'plasenta_berimplatansi', 'derajat_maturitas', 'jumlah_air_ketuban', 'indek_cairan_ketuban', 'kelainan_kongenital', 'peluang_sex', 'kesimpulan'], 'safe'],
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
        $query = HasilPemeriksaanUsg::find();

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
            ->andFilterWhere(['like', 'diagnosa_klinis', $this->diagnosa_klinis])
            ->andFilterWhere(['like', 'kiriman_dari', $this->kiriman_dari])
            ->andFilterWhere(['like', 'hta', $this->hta])
            ->andFilterWhere(['like', 'kantong_gestasi', $this->kantong_gestasi])
            ->andFilterWhere(['like', 'ukuran_bokongkepala', $this->ukuran_bokongkepala])
            ->andFilterWhere(['like', 'jenis_prestasi', $this->jenis_prestasi])
            ->andFilterWhere(['like', 'diameter_biparietal', $this->diameter_biparietal])
            ->andFilterWhere(['like', 'panjang_femur', $this->panjang_femur])
            ->andFilterWhere(['like', 'lingkar_abdomen', $this->lingkar_abdomen])
            ->andFilterWhere(['like', 'tafsiran_berat_janin', $this->tafsiran_berat_janin])
            ->andFilterWhere(['like', 'usia_kehamilan', $this->usia_kehamilan])
            ->andFilterWhere(['like', 'plasenta_berimplatansi', $this->plasenta_berimplatansi])
            ->andFilterWhere(['like', 'derajat_maturitas', $this->derajat_maturitas])
            ->andFilterWhere(['like', 'jumlah_air_ketuban', $this->jumlah_air_ketuban])
            ->andFilterWhere(['like', 'indek_cairan_ketuban', $this->indek_cairan_ketuban])
            ->andFilterWhere(['like', 'kelainan_kongenital', $this->kelainan_kongenital])
            ->andFilterWhere(['like', 'peluang_sex', $this->peluang_sex])
            ->andFilterWhere(['like', 'kesimpulan', $this->kesimpulan]);

        return $dataProvider;
    }
}
