<?php

namespace frontend\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use frontend\models\InventarisGambar;

/**
 * InventarisGambarSearch represents the model behind the search form of `frontend\models\InventarisGambar`.
 */
class InventarisGambarSearch extends InventarisGambar
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['no_inventaris', 'photo'], 'safe'],
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
        $query = InventarisGambar::find();

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
        $query->andFilterWhere(['like', 'no_inventaris', $this->no_inventaris])
            ->andFilterWhere(['like', 'photo', $this->photo]);

        return $dataProvider;
    }
}
