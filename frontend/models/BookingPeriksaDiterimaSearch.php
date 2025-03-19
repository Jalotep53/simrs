<?php

namespace frontend\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use frontend\models\BookingPeriksaDiterima;

/**
 * BookingPeriksaDiterimaSearch represents the model behind the search form of `frontend\models\BookingPeriksaDiterima`.
 */
class BookingPeriksaDiterimaSearch extends BookingPeriksaDiterima
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['no_booking', 'no_rkm_medis'], 'safe'],
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
        $query = BookingPeriksaDiterima::find();

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
        $query->andFilterWhere(['like', 'no_booking', $this->no_booking])
            ->andFilterWhere(['like', 'no_rkm_medis', $this->no_rkm_medis]);

        return $dataProvider;
    }
}
