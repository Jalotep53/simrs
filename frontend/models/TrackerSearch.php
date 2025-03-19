<?php

namespace frontend\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use frontend\models\Tracker;

/**
 * TrackerSearch represents the model behind the search form of `frontend\models\Tracker`.
 */
class TrackerSearch extends Tracker
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nip', 'tgl_login', 'jam_login'], 'safe'],
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
        $query = Tracker::find();

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
            'tgl_login' => $this->tgl_login,
            'jam_login' => $this->jam_login,
        ]);

        $query->andFilterWhere(['like', 'nip', $this->nip]);

        return $dataProvider;
    }
}
