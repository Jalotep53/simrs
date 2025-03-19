<?php

namespace frontend\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use frontend\models\MppEvaluasi;

/**
 * MppEvaluasiSearch represents the model behind the search form of `frontend\models\MppEvaluasi`.
 */
class MppEvaluasiSearch extends MppEvaluasi
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['no_rawat', 'tanggal', 'kd_dokter', 'kd_konsulan', 'diagnosis', 'kelompok', 'assesmen', 'identifikasi', 'rencana', 'nip'], 'safe'],
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
        $query = MppEvaluasi::find();

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
            ->andFilterWhere(['like', 'kd_dokter', $this->kd_dokter])
            ->andFilterWhere(['like', 'kd_konsulan', $this->kd_konsulan])
            ->andFilterWhere(['like', 'diagnosis', $this->diagnosis])
            ->andFilterWhere(['like', 'kelompok', $this->kelompok])
            ->andFilterWhere(['like', 'assesmen', $this->assesmen])
            ->andFilterWhere(['like', 'identifikasi', $this->identifikasi])
            ->andFilterWhere(['like', 'rencana', $this->rencana])
            ->andFilterWhere(['like', 'nip', $this->nip]);

        return $dataProvider;
    }
}
