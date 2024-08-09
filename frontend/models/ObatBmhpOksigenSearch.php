<?php

namespace frontend\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use frontend\models\ObatBmhpOksigen;

/**
 * ObatBmhpOksigenSearch represents the model behind the search form of `frontend\models\ObatBmhpOksigen`.
 */
class ObatBmhpOksigenSearch extends ObatBmhpOksigen
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'kode_kat'], 'integer'],
            [['kode_brng'], 'safe'],
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
        $query = ObatBmhpOksigen::find();

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
            'id' => $this->id,
            'kode_kat' => $this->kode_kat,
        ]);

        $query->andFilterWhere(['like', 'kode_brng', $this->kode_brng]);

        return $dataProvider;
    }
}
