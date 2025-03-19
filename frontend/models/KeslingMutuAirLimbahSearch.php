<?php

namespace frontend\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use frontend\models\KeslingMutuAirLimbah;

/**
 * KeslingMutuAirLimbahSearch represents the model behind the search form of `frontend\models\KeslingMutuAirLimbah`.
 */
class KeslingMutuAirLimbahSearch extends KeslingMutuAirLimbah
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nip', 'tanggal'], 'safe'],
            [['meteran', 'jumlahharian', 'ph', 'suhu', 'tds', 'ec', 'salt'], 'number'],
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
        $query = KeslingMutuAirLimbah::find();

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
            'ph' => $this->ph,
            'suhu' => $this->suhu,
            'tds' => $this->tds,
            'ec' => $this->ec,
            'salt' => $this->salt,
        ]);

        $query->andFilterWhere(['like', 'nip', $this->nip]);

        return $dataProvider;
    }
}
