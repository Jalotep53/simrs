<?php

namespace frontend\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use frontend\models\ParkirJenis;

/**
 * ParkirJenisSearch represents the model behind the search form of `frontend\models\ParkirJenis`.
 */
class ParkirJenisSearch extends ParkirJenis
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['kd_parkir', 'jns_parkir', 'jenis'], 'safe'],
            [['biaya'], 'number'],
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
        $query = ParkirJenis::find();

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
            'biaya' => $this->biaya,
        ]);

        $query->andFilterWhere(['like', 'kd_parkir', $this->kd_parkir])
            ->andFilterWhere(['like', 'jns_parkir', $this->jns_parkir])
            ->andFilterWhere(['like', 'jenis', $this->jenis]);

        return $dataProvider;
    }
}
