<?php

namespace frontend\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use frontend\models\HasilPemeriksaanUsgUrologi;

/**
 * HasilPemeriksaanUsgUrologiSearch represents the model behind the search form of `frontend\models\HasilPemeriksaanUsgUrologi`.
 */
class HasilPemeriksaanUsgUrologiSearch extends HasilPemeriksaanUsgUrologi
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['no_rawat', 'tanggal', 'kd_dokter', 'diagnosa_klinis', 'kiriman_dari', 'ginjal_kanan', 'ginjal_kiri', 'vesica_urinaria', 'tambahan'], 'safe'],
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
        $query = HasilPemeriksaanUsgUrologi::find();

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
            ->andFilterWhere(['like', 'ginjal_kanan', $this->ginjal_kanan])
            ->andFilterWhere(['like', 'ginjal_kiri', $this->ginjal_kiri])
            ->andFilterWhere(['like', 'vesica_urinaria', $this->vesica_urinaria])
            ->andFilterWhere(['like', 'tambahan', $this->tambahan]);

        return $dataProvider;
    }
}
