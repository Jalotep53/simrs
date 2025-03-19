<?php

namespace frontend\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use frontend\models\PerpustakaanRuang;

/**
 * PerpustakaanRuangSearch represents the model behind the search form of `frontend\models\PerpustakaanRuang`.
 */
class PerpustakaanRuangSearch extends PerpustakaanRuang
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['kd_ruang', 'nm_ruang'], 'safe'],
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
        $query = PerpustakaanRuang::find();

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
        $query->andFilterWhere(['like', 'kd_ruang', $this->kd_ruang])
            ->andFilterWhere(['like', 'nm_ruang', $this->nm_ruang]);

        return $dataProvider;
    }
}
