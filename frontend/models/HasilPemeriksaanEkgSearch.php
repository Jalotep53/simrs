<?php

namespace frontend\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use frontend\models\HasilPemeriksaanEkg;

/**
 * HasilPemeriksaanEkgSearch represents the model behind the search form of `frontend\models\HasilPemeriksaanEkg`.
 */
class HasilPemeriksaanEkgSearch extends HasilPemeriksaanEkg
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['no_rawat', 'tanggal', 'kd_dokter', 'diagnosa_klinis', 'kiriman_dari', 'irama', 'laju_jantung', 'gelombangp', 'intervalpr', 'axis', 'kompleksqrs', 'segmenst', 'gelombangt', 'kesimpulan'], 'safe'],
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
        $query = HasilPemeriksaanEkg::find();

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
            ->andFilterWhere(['like', 'irama', $this->irama])
            ->andFilterWhere(['like', 'laju_jantung', $this->laju_jantung])
            ->andFilterWhere(['like', 'gelombangp', $this->gelombangp])
            ->andFilterWhere(['like', 'intervalpr', $this->intervalpr])
            ->andFilterWhere(['like', 'axis', $this->axis])
            ->andFilterWhere(['like', 'kompleksqrs', $this->kompleksqrs])
            ->andFilterWhere(['like', 'segmenst', $this->segmenst])
            ->andFilterWhere(['like', 'gelombangt', $this->gelombangt])
            ->andFilterWhere(['like', 'kesimpulan', $this->kesimpulan]);

        return $dataProvider;
    }
}
