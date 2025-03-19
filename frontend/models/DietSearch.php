<?php

namespace frontend\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use frontend\models\Diet;

/**
 * DietSearch represents the model behind the search form of `frontend\models\Diet`.
 */
class DietSearch extends Diet
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['kd_diet', 'nama_diet'], 'safe'],
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
        $query = Diet::find();

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
        $query->andFilterWhere(['like', 'kd_diet', $this->kd_diet])
            ->andFilterWhere(['like', 'nama_diet', $this->nama_diet]);

        return $dataProvider;
    }
}
