<?php

namespace frontend\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use frontend\models\RujukMasuk;

/**
 * RujukMasukSearch represents the model behind the search form of `frontend\models\RujukMasuk`.
 */
class RujukMasukSearch extends RujukMasuk
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['no_rawat', 'perujuk', 'alamat', 'no_rujuk', 'dokter_perujuk', 'kd_penyakit', 'kategori_rujuk', 'keterangan', 'no_balasan'], 'safe'],
            [['jm_perujuk'], 'number'],
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
        $query = RujukMasuk::find();

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
            'jm_perujuk' => $this->jm_perujuk,
        ]);

        $query->andFilterWhere(['like', 'no_rawat', $this->no_rawat])
            ->andFilterWhere(['like', 'perujuk', $this->perujuk])
            ->andFilterWhere(['like', 'alamat', $this->alamat])
            ->andFilterWhere(['like', 'no_rujuk', $this->no_rujuk])
            ->andFilterWhere(['like', 'dokter_perujuk', $this->dokter_perujuk])
            ->andFilterWhere(['like', 'kd_penyakit', $this->kd_penyakit])
            ->andFilterWhere(['like', 'kategori_rujuk', $this->kategori_rujuk])
            ->andFilterWhere(['like', 'keterangan', $this->keterangan])
            ->andFilterWhere(['like', 'no_balasan', $this->no_balasan]);

        return $dataProvider;
    }
}
