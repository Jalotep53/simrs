<?php

namespace frontend\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use frontend\models\HasilEndoskopiHidung;

/**
 * HasilEndoskopiHidungSearch represents the model behind the search form of `frontend\models\HasilEndoskopiHidung`.
 */
class HasilEndoskopiHidungSearch extends HasilEndoskopiHidung
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['no_rawat', 'tanggal', 'kd_dokter', 'diagnosa_klinis', 'kiriman_dari', 'kondisi_hidung_kanan', 'kondisi_hidung_kiri', 'kavum_nasi_kanan', 'kavum_nasi_kiri', 'konka_inferior_kanan', 'konka_inferior_kiri', 'meatus_medius_kanan', 'meatus_medius_kiri', 'septum_kanan', 'septum_kiri', 'nasofaring_kanan', 'nasofaring_kiri', 'lainlain_kanan', 'lainlain_kiri', 'kesimpulan'], 'safe'],
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
        $query = HasilEndoskopiHidung::find();

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
            ->andFilterWhere(['like', 'kondisi_hidung_kanan', $this->kondisi_hidung_kanan])
            ->andFilterWhere(['like', 'kondisi_hidung_kiri', $this->kondisi_hidung_kiri])
            ->andFilterWhere(['like', 'kavum_nasi_kanan', $this->kavum_nasi_kanan])
            ->andFilterWhere(['like', 'kavum_nasi_kiri', $this->kavum_nasi_kiri])
            ->andFilterWhere(['like', 'konka_inferior_kanan', $this->konka_inferior_kanan])
            ->andFilterWhere(['like', 'konka_inferior_kiri', $this->konka_inferior_kiri])
            ->andFilterWhere(['like', 'meatus_medius_kanan', $this->meatus_medius_kanan])
            ->andFilterWhere(['like', 'meatus_medius_kiri', $this->meatus_medius_kiri])
            ->andFilterWhere(['like', 'septum_kanan', $this->septum_kanan])
            ->andFilterWhere(['like', 'septum_kiri', $this->septum_kiri])
            ->andFilterWhere(['like', 'nasofaring_kanan', $this->nasofaring_kanan])
            ->andFilterWhere(['like', 'nasofaring_kiri', $this->nasofaring_kiri])
            ->andFilterWhere(['like', 'lainlain_kanan', $this->lainlain_kanan])
            ->andFilterWhere(['like', 'lainlain_kiri', $this->lainlain_kiri])
            ->andFilterWhere(['like', 'kesimpulan', $this->kesimpulan]);

        return $dataProvider;
    }
}
