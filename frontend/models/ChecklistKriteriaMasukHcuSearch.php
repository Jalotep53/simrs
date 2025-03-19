<?php

namespace frontend\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use frontend\models\ChecklistKriteriaMasukHcu;

/**
 * ChecklistKriteriaMasukHcuSearch represents the model behind the search form of `frontend\models\ChecklistKriteriaMasukHcu`.
 */
class ChecklistKriteriaMasukHcuSearch extends ChecklistKriteriaMasukHcu
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['no_rawat', 'tanggal', 'kardiologi1', 'kardiologi2', 'kardiologi3', 'kardiologi4', 'kardiologi5', 'kardiologi6', 'pernapasan1', 'pernapasan2', 'pernapasan3', 'syaraf1', 'syaraf2', 'syaraf3', 'syaraf4', 'pencernaan1', 'pencernaan2', 'pencernaan3', 'pencernaan4', 'pembedahan1', 'pembedahan2', 'hematologi1', 'hematologi2', 'infeksi', 'nik'], 'safe'],
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
        $query = ChecklistKriteriaMasukHcu::find();

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
            ->andFilterWhere(['like', 'kardiologi1', $this->kardiologi1])
            ->andFilterWhere(['like', 'kardiologi2', $this->kardiologi2])
            ->andFilterWhere(['like', 'kardiologi3', $this->kardiologi3])
            ->andFilterWhere(['like', 'kardiologi4', $this->kardiologi4])
            ->andFilterWhere(['like', 'kardiologi5', $this->kardiologi5])
            ->andFilterWhere(['like', 'kardiologi6', $this->kardiologi6])
            ->andFilterWhere(['like', 'pernapasan1', $this->pernapasan1])
            ->andFilterWhere(['like', 'pernapasan2', $this->pernapasan2])
            ->andFilterWhere(['like', 'pernapasan3', $this->pernapasan3])
            ->andFilterWhere(['like', 'syaraf1', $this->syaraf1])
            ->andFilterWhere(['like', 'syaraf2', $this->syaraf2])
            ->andFilterWhere(['like', 'syaraf3', $this->syaraf3])
            ->andFilterWhere(['like', 'syaraf4', $this->syaraf4])
            ->andFilterWhere(['like', 'pencernaan1', $this->pencernaan1])
            ->andFilterWhere(['like', 'pencernaan2', $this->pencernaan2])
            ->andFilterWhere(['like', 'pencernaan3', $this->pencernaan3])
            ->andFilterWhere(['like', 'pencernaan4', $this->pencernaan4])
            ->andFilterWhere(['like', 'pembedahan1', $this->pembedahan1])
            ->andFilterWhere(['like', 'pembedahan2', $this->pembedahan2])
            ->andFilterWhere(['like', 'hematologi1', $this->hematologi1])
            ->andFilterWhere(['like', 'hematologi2', $this->hematologi2])
            ->andFilterWhere(['like', 'infeksi', $this->infeksi])
            ->andFilterWhere(['like', 'nik', $this->nik]);

        return $dataProvider;
    }
}
