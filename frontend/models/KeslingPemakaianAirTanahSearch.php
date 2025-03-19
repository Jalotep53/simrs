<?php

namespace frontend\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use frontend\models\KeslingPemakaianAirTanah;

/**
 * KeslingPemakaianAirTanahSearch represents the model behind the search form of `frontend\models\KeslingPemakaianAirTanah`.
 */
class KeslingPemakaianAirTanahSearch extends KeslingPemakaianAirTanah
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nip', 'tanggal', 'keterangan'], 'safe'],
            [['meteran', 'jumlahharian'], 'number'],
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
        $query = KeslingPemakaianAirTanah::find();

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
            'tanggal' => $this->tanggal,
            'meteran' => $this->meteran,
            'jumlahharian' => $this->jumlahharian,
        ]);

        $query->andFilterWhere(['like', 'nip', $this->nip])
            ->andFilterWhere(['like', 'keterangan', $this->keterangan]);

        return $dataProvider;
    }
}
