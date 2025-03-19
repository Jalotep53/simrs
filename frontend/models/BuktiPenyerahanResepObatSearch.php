<?php

namespace frontend\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use frontend\models\BuktiPenyerahanResepObat;

/**
 * BuktiPenyerahanResepObatSearch represents the model behind the search form of `frontend\models\BuktiPenyerahanResepObat`.
 */
class BuktiPenyerahanResepObatSearch extends BuktiPenyerahanResepObat
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['no_resep', 'photo'], 'safe'],
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
        $query = BuktiPenyerahanResepObat::find();

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
        $query->andFilterWhere(['like', 'no_resep', $this->no_resep])
            ->andFilterWhere(['like', 'photo', $this->photo]);

        return $dataProvider;
    }
}
