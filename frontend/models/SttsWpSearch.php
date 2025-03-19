<?php

namespace frontend\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use frontend\models\SttsWp;

/**
 * SttsWpSearch represents the model behind the search form of `frontend\models\SttsWp`.
 */
class SttsWpSearch extends SttsWp
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['stts', 'ktg'], 'safe'],
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
        $query = SttsWp::find();

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
        $query->andFilterWhere(['like', 'stts', $this->stts])
            ->andFilterWhere(['like', 'ktg', $this->ktg]);

        return $dataProvider;
    }
}
