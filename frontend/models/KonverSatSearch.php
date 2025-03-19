<?php

namespace frontend\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use frontend\models\KonverSat;

/**
 * KonverSatSearch represents the model behind the search form of `frontend\models\KonverSat`.
 */
class KonverSatSearch extends KonverSat
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nilai', 'nilai_konversi'], 'number'],
            [['kode_sat', 'sat_konversi'], 'safe'],
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
        $query = KonverSat::find();

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
            'nilai' => $this->nilai,
            'nilai_konversi' => $this->nilai_konversi,
        ]);

        $query->andFilterWhere(['like', 'kode_sat', $this->kode_sat])
            ->andFilterWhere(['like', 'sat_konversi', $this->sat_konversi]);

        return $dataProvider;
    }
}
