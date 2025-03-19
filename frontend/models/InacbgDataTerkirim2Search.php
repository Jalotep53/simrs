<?php

namespace frontend\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use frontend\models\InacbgDataTerkirim2;

/**
 * InacbgDataTerkirim2Search represents the model behind the search form of `frontend\models\InacbgDataTerkirim2`.
 */
class InacbgDataTerkirim2Search extends InacbgDataTerkirim2
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['no_sep', 'nik'], 'safe'],
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
        $query = InacbgDataTerkirim2::find();

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
        $query->andFilterWhere(['like', 'no_sep', $this->no_sep])
            ->andFilterWhere(['like', 'nik', $this->nik]);

        return $dataProvider;
    }
}
