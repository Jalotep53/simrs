<?php

namespace frontend\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use frontend\models\Spesialis;

/**
 * SpesialisSearch represents the model behind the search form of `frontend\models\Spesialis`.
 */
class SpesialisSearch extends Spesialis
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['kd_sps', 'nm_sps'], 'safe'],
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
        $query = Spesialis::find();

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
        $query->andFilterWhere(['like', 'kd_sps', $this->kd_sps])
            ->andFilterWhere(['like', 'nm_sps', $this->nm_sps]);

        return $dataProvider;
    }
}
