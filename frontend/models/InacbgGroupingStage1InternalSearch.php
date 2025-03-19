<?php

namespace frontend\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use frontend\models\InacbgGroupingStage1Internal;

/**
 * InacbgGroupingStage1InternalSearch represents the model behind the search form of `frontend\models\InacbgGroupingStage1Internal`.
 */
class InacbgGroupingStage1InternalSearch extends InacbgGroupingStage1Internal
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['no_sep', 'code_cbg', 'deskripsi'], 'safe'],
            [['tarif'], 'number'],
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
        $query = InacbgGroupingStage1Internal::find();

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
            'tarif' => $this->tarif,
        ]);

        $query->andFilterWhere(['like', 'no_sep', $this->no_sep])
            ->andFilterWhere(['like', 'code_cbg', $this->code_cbg])
            ->andFilterWhere(['like', 'deskripsi', $this->deskripsi]);

        return $dataProvider;
    }
}
