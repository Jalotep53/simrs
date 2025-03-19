<?php

namespace frontend\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use frontend\models\MppSkrining;

/**
 * MppSkriningSearch represents the model behind the search form of `frontend\models\MppSkrining`.
 */
class MppSkriningSearch extends MppSkrining
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['no_rawat', 'tanggal', 'param1', 'param2', 'param3', 'param4', 'param5', 'param6', 'param7', 'param8', 'param9', 'param10', 'param11', 'param12', 'param13', 'param14', 'param15', 'param16', 'nip'], 'safe'],
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
        $query = MppSkrining::find();

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
        ]);

        $query->andFilterWhere(['like', 'no_rawat', $this->no_rawat])
            ->andFilterWhere(['like', 'param1', $this->param1])
            ->andFilterWhere(['like', 'param2', $this->param2])
            ->andFilterWhere(['like', 'param3', $this->param3])
            ->andFilterWhere(['like', 'param4', $this->param4])
            ->andFilterWhere(['like', 'param5', $this->param5])
            ->andFilterWhere(['like', 'param6', $this->param6])
            ->andFilterWhere(['like', 'param7', $this->param7])
            ->andFilterWhere(['like', 'param8', $this->param8])
            ->andFilterWhere(['like', 'param9', $this->param9])
            ->andFilterWhere(['like', 'param10', $this->param10])
            ->andFilterWhere(['like', 'param11', $this->param11])
            ->andFilterWhere(['like', 'param12', $this->param12])
            ->andFilterWhere(['like', 'param13', $this->param13])
            ->andFilterWhere(['like', 'param14', $this->param14])
            ->andFilterWhere(['like', 'param15', $this->param15])
            ->andFilterWhere(['like', 'param16', $this->param16])
            ->andFilterWhere(['like', 'nip', $this->nip]);

        return $dataProvider;
    }
}
