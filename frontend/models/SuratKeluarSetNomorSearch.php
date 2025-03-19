<?php

namespace frontend\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use frontend\models\SuratKeluarSetNomor;

/**
 * SuratKeluarSetNomorSearch represents the model behind the search form of `frontend\models\SuratKeluarSetNomor`.
 */
class SuratKeluarSetNomorSearch extends SuratKeluarSetNomor
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_no_surat'], 'integer'],
            [['jenis_surat', 'digit_1', 'digit_2', 'digit_3', 'digit_4', 'digit_5', 'digit_6', 'digit_7', 'digit_8', 'digit_9', 'digit_10', 'digit_11', 'digit_12', 'digit_13', 'digit_14', 'digit_15'], 'safe'],
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
        $query = SuratKeluarSetNomor::find();

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
            'id_no_surat' => $this->id_no_surat,
        ]);

        $query->andFilterWhere(['like', 'jenis_surat', $this->jenis_surat])
            ->andFilterWhere(['like', 'digit_1', $this->digit_1])
            ->andFilterWhere(['like', 'digit_2', $this->digit_2])
            ->andFilterWhere(['like', 'digit_3', $this->digit_3])
            ->andFilterWhere(['like', 'digit_4', $this->digit_4])
            ->andFilterWhere(['like', 'digit_5', $this->digit_5])
            ->andFilterWhere(['like', 'digit_6', $this->digit_6])
            ->andFilterWhere(['like', 'digit_7', $this->digit_7])
            ->andFilterWhere(['like', 'digit_8', $this->digit_8])
            ->andFilterWhere(['like', 'digit_9', $this->digit_9])
            ->andFilterWhere(['like', 'digit_10', $this->digit_10])
            ->andFilterWhere(['like', 'digit_11', $this->digit_11])
            ->andFilterWhere(['like', 'digit_12', $this->digit_12])
            ->andFilterWhere(['like', 'digit_13', $this->digit_13])
            ->andFilterWhere(['like', 'digit_14', $this->digit_14])
            ->andFilterWhere(['like', 'digit_15', $this->digit_15]);

        return $dataProvider;
    }
}
