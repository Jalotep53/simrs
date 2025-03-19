<?php

namespace frontend\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use frontend\models\ObatPenyakit;

/**
 * ObatPenyakitSearch represents the model behind the search form of `frontend\models\ObatPenyakit`.
 */
class ObatPenyakitSearch extends ObatPenyakit
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['kd_penyakit', 'kode_brng', 'referensi'], 'safe'],
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
        $query = ObatPenyakit::find();

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
        $query->andFilterWhere(['like', 'kd_penyakit', $this->kd_penyakit])
            ->andFilterWhere(['like', 'kode_brng', $this->kode_brng])
            ->andFilterWhere(['like', 'referensi', $this->referensi]);

        return $dataProvider;
    }
}
