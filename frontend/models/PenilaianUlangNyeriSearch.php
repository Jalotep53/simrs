<?php

namespace frontend\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use frontend\models\PenilaianUlangNyeri;

/**
 * PenilaianUlangNyeriSearch represents the model behind the search form of `frontend\models\PenilaianUlangNyeri`.
 */
class PenilaianUlangNyeriSearch extends PenilaianUlangNyeri
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['no_rawat', 'tanggal', 'nyeri', 'provokes', 'ket_provokes', 'quality', 'ket_quality', 'lokasi', 'menyebar', 'skala_nyeri', 'durasi', 'nyeri_hilang', 'ket_nyeri', 'nip'], 'safe'],
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
        $query = PenilaianUlangNyeri::find();

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
            ->andFilterWhere(['like', 'nyeri', $this->nyeri])
            ->andFilterWhere(['like', 'provokes', $this->provokes])
            ->andFilterWhere(['like', 'ket_provokes', $this->ket_provokes])
            ->andFilterWhere(['like', 'quality', $this->quality])
            ->andFilterWhere(['like', 'ket_quality', $this->ket_quality])
            ->andFilterWhere(['like', 'lokasi', $this->lokasi])
            ->andFilterWhere(['like', 'menyebar', $this->menyebar])
            ->andFilterWhere(['like', 'skala_nyeri', $this->skala_nyeri])
            ->andFilterWhere(['like', 'durasi', $this->durasi])
            ->andFilterWhere(['like', 'nyeri_hilang', $this->nyeri_hilang])
            ->andFilterWhere(['like', 'ket_nyeri', $this->ket_nyeri])
            ->andFilterWhere(['like', 'nip', $this->nip]);

        return $dataProvider;
    }
}
