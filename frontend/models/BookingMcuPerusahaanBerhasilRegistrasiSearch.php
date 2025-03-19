<?php

namespace frontend\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use frontend\models\BookingMcuPerusahaanBerhasilRegistrasi;

/**
 * BookingMcuPerusahaanBerhasilRegistrasiSearch represents the model behind the search form of `frontend\models\BookingMcuPerusahaanBerhasilRegistrasi`.
 */
class BookingMcuPerusahaanBerhasilRegistrasiSearch extends BookingMcuPerusahaanBerhasilRegistrasi
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['no_mcu', 'no_rawat'], 'safe'],
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
        $query = BookingMcuPerusahaanBerhasilRegistrasi::find();

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
        $query->andFilterWhere(['like', 'no_mcu', $this->no_mcu])
            ->andFilterWhere(['like', 'no_rawat', $this->no_rawat]);

        return $dataProvider;
    }
}
