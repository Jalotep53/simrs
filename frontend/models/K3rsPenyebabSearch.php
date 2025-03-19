<?php

namespace frontend\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use frontend\models\K3rsPenyebab;

/**
 * K3rsPenyebabSearch represents the model behind the search form of `frontend\models\K3rsPenyebab`.
 */
class K3rsPenyebabSearch extends K3rsPenyebab
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['kode_penyebab', 'penyebab_kecelakaan'], 'safe'],
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
        $query = K3rsPenyebab::find();

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
        $query->andFilterWhere(['like', 'kode_penyebab', $this->kode_penyebab])
            ->andFilterWhere(['like', 'penyebab_kecelakaan', $this->penyebab_kecelakaan]);

        return $dataProvider;
    }
}
