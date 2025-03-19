<?php

namespace frontend\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use frontend\models\PerpustakaanDenda;

/**
 * PerpustakaanDendaSearch represents the model behind the search form of `frontend\models\PerpustakaanDenda`.
 */
class PerpustakaanDendaSearch extends PerpustakaanDenda
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['kode_denda', 'jenis_denda'], 'safe'],
            [['besar_denda'], 'number'],
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
        $query = PerpustakaanDenda::find();

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
            'besar_denda' => $this->besar_denda,
        ]);

        $query->andFilterWhere(['like', 'kode_denda', $this->kode_denda])
            ->andFilterWhere(['like', 'jenis_denda', $this->jenis_denda]);

        return $dataProvider;
    }
}
