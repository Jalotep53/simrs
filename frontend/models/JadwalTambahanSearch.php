<?php

namespace frontend\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use frontend\models\JadwalTambahan;

/**
 * JadwalTambahanSearch represents the model behind the search form of `frontend\models\JadwalTambahan`.
 */
class JadwalTambahanSearch extends JadwalTambahan
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id'], 'integer'],
            [['tahun', 'bulan', 'h1', 'h2', 'h3', 'h4', 'h5', 'h6', 'h7', 'h8', 'h9', 'h10', 'h11', 'h12', 'h13', 'h14', 'h15', 'h16', 'h17', 'h18', 'h19', 'h20', 'h21', 'h22', 'h23', 'h24', 'h25', 'h26', 'h27', 'h28', 'h29', 'h30', 'h31'], 'safe'],
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
        $query = JadwalTambahan::find();

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
            'id' => $this->id,
            'tahun' => $this->tahun,
        ]);

        $query->andFilterWhere(['like', 'bulan', $this->bulan])
            ->andFilterWhere(['like', 'h1', $this->h1])
            ->andFilterWhere(['like', 'h2', $this->h2])
            ->andFilterWhere(['like', 'h3', $this->h3])
            ->andFilterWhere(['like', 'h4', $this->h4])
            ->andFilterWhere(['like', 'h5', $this->h5])
            ->andFilterWhere(['like', 'h6', $this->h6])
            ->andFilterWhere(['like', 'h7', $this->h7])
            ->andFilterWhere(['like', 'h8', $this->h8])
            ->andFilterWhere(['like', 'h9', $this->h9])
            ->andFilterWhere(['like', 'h10', $this->h10])
            ->andFilterWhere(['like', 'h11', $this->h11])
            ->andFilterWhere(['like', 'h12', $this->h12])
            ->andFilterWhere(['like', 'h13', $this->h13])
            ->andFilterWhere(['like', 'h14', $this->h14])
            ->andFilterWhere(['like', 'h15', $this->h15])
            ->andFilterWhere(['like', 'h16', $this->h16])
            ->andFilterWhere(['like', 'h17', $this->h17])
            ->andFilterWhere(['like', 'h18', $this->h18])
            ->andFilterWhere(['like', 'h19', $this->h19])
            ->andFilterWhere(['like', 'h20', $this->h20])
            ->andFilterWhere(['like', 'h21', $this->h21])
            ->andFilterWhere(['like', 'h22', $this->h22])
            ->andFilterWhere(['like', 'h23', $this->h23])
            ->andFilterWhere(['like', 'h24', $this->h24])
            ->andFilterWhere(['like', 'h25', $this->h25])
            ->andFilterWhere(['like', 'h26', $this->h26])
            ->andFilterWhere(['like', 'h27', $this->h27])
            ->andFilterWhere(['like', 'h28', $this->h28])
            ->andFilterWhere(['like', 'h29', $this->h29])
            ->andFilterWhere(['like', 'h30', $this->h30])
            ->andFilterWhere(['like', 'h31', $this->h31]);

        return $dataProvider;
    }
}
