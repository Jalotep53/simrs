<?php

namespace frontend\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use frontend\models\SetPjlab;

/**
 * SetPjlabSearch represents the model behind the search form of `frontend\models\SetPjlab`.
 */
class SetPjlabSearch extends SetPjlab
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['kd_dokterlab', 'kd_dokterrad', 'kd_dokterhemodialisa', 'kd_dokterutd', 'kd_dokterlabpa', 'kd_dokterlabmb'], 'safe'],
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
        $query = SetPjlab::find();

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
        $query->andFilterWhere(['like', 'kd_dokterlab', $this->kd_dokterlab])
            ->andFilterWhere(['like', 'kd_dokterrad', $this->kd_dokterrad])
            ->andFilterWhere(['like', 'kd_dokterhemodialisa', $this->kd_dokterhemodialisa])
            ->andFilterWhere(['like', 'kd_dokterutd', $this->kd_dokterutd])
            ->andFilterWhere(['like', 'kd_dokterlabpa', $this->kd_dokterlabpa])
            ->andFilterWhere(['like', 'kd_dokterlabmb', $this->kd_dokterlabmb]);

        return $dataProvider;
    }
}
