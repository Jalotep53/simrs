<?php

namespace frontend\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use frontend\models\KategoriPerawatan;

/**
 * KategoriPerawatanSearch represents the model behind the search form of `frontend\models\KategoriPerawatan`.
 */
class KategoriPerawatanSearch extends KategoriPerawatan
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['kd_kategori', 'nm_kategori'], 'safe'],
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
        $query = KategoriPerawatan::find();

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
        $query->andFilterWhere(['like', 'kd_kategori', $this->kd_kategori])
            ->andFilterWhere(['like', 'nm_kategori', $this->nm_kategori]);

        return $dataProvider;
    }
}
