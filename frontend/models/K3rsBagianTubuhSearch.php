<?php

namespace frontend\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use frontend\models\K3rsBagianTubuh;

/**
 * K3rsBagianTubuhSearch represents the model behind the search form of `frontend\models\K3rsBagianTubuh`.
 */
class K3rsBagianTubuhSearch extends K3rsBagianTubuh
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['kode_bagian', 'bagian_tubuh'], 'safe'],
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
        $query = K3rsBagianTubuh::find();

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
        $query->andFilterWhere(['like', 'kode_bagian', $this->kode_bagian])
            ->andFilterWhere(['like', 'bagian_tubuh', $this->bagian_tubuh]);

        return $dataProvider;
    }
}
