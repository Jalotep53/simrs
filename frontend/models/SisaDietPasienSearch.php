<?php

namespace frontend\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use frontend\models\SisaDietPasien;

/**
 * SisaDietPasienSearch represents the model behind the search form of `frontend\models\SisaDietPasien`.
 */
class SisaDietPasienSearch extends SisaDietPasien
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['no_rawat', 'kd_kamar', 'tanggal', 'waktu'], 'safe'],
            [['karbohidrat', 'hewani', 'nabati', 'sayur', 'buah'], 'integer'],
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
        $query = SisaDietPasien::find();

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
            'karbohidrat' => $this->karbohidrat,
            'hewani' => $this->hewani,
            'nabati' => $this->nabati,
            'sayur' => $this->sayur,
            'buah' => $this->buah,
        ]);

        $query->andFilterWhere(['like', 'no_rawat', $this->no_rawat])
            ->andFilterWhere(['like', 'kd_kamar', $this->kd_kamar])
            ->andFilterWhere(['like', 'waktu', $this->waktu]);

        return $dataProvider;
    }
}
