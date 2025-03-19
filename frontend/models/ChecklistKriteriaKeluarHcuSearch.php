<?php

namespace frontend\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use frontend\models\ChecklistKriteriaKeluarHcu;

/**
 * ChecklistKriteriaKeluarHcuSearch represents the model behind the search form of `frontend\models\ChecklistKriteriaKeluarHcu`.
 */
class ChecklistKriteriaKeluarHcuSearch extends ChecklistKriteriaKeluarHcu
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['no_rawat', 'tanggal', 'kriteria1', 'kriteria2', 'kriteria3', 'kriteria4', 'kriteria5', 'kriteria6', 'kriteria7', 'kriteria8', 'kriteria9', 'kriteria10', 'kriteria11', 'kriteria12', 'nik'], 'safe'],
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
        $query = ChecklistKriteriaKeluarHcu::find();

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
            ->andFilterWhere(['like', 'kriteria1', $this->kriteria1])
            ->andFilterWhere(['like', 'kriteria2', $this->kriteria2])
            ->andFilterWhere(['like', 'kriteria3', $this->kriteria3])
            ->andFilterWhere(['like', 'kriteria4', $this->kriteria4])
            ->andFilterWhere(['like', 'kriteria5', $this->kriteria5])
            ->andFilterWhere(['like', 'kriteria6', $this->kriteria6])
            ->andFilterWhere(['like', 'kriteria7', $this->kriteria7])
            ->andFilterWhere(['like', 'kriteria8', $this->kriteria8])
            ->andFilterWhere(['like', 'kriteria9', $this->kriteria9])
            ->andFilterWhere(['like', 'kriteria10', $this->kriteria10])
            ->andFilterWhere(['like', 'kriteria11', $this->kriteria11])
            ->andFilterWhere(['like', 'kriteria12', $this->kriteria12])
            ->andFilterWhere(['like', 'nik', $this->nik]);

        return $dataProvider;
    }
}
