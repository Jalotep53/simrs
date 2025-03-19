<?php

namespace frontend\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use frontend\models\SkpKriteriaPenilaian;

/**
 * SkpKriteriaPenilaianSearch represents the model behind the search form of `frontend\models\SkpKriteriaPenilaian`.
 */
class SkpKriteriaPenilaianSearch extends SkpKriteriaPenilaian
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['kode_kriteria', 'nama_kriteria', 'kode_kategori'], 'safe'],
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
        $query = SkpKriteriaPenilaian::find();

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
        $query->andFilterWhere(['like', 'kode_kriteria', $this->kode_kriteria])
            ->andFilterWhere(['like', 'nama_kriteria', $this->nama_kriteria])
            ->andFilterWhere(['like', 'kode_kategori', $this->kode_kategori]);

        return $dataProvider;
    }
}
