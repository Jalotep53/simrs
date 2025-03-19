<?php

namespace frontend\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use frontend\models\Indexins;

/**
 * IndexinsSearch represents the model behind the search form of `frontend\models\Indexins`.
 */
class IndexinsSearch extends Indexins
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['dep_id'], 'safe'],
            [['persen'], 'number'],
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
        $query = Indexins::find();

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
            'persen' => $this->persen,
        ]);

        $query->andFilterWhere(['like', 'dep_id', $this->dep_id]);

        return $dataProvider;
    }
}
