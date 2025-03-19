<?php

namespace frontend\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use frontend\models\ResepDokterRacikanDetail;

/**
 * ResepDokterRacikanDetailSearch represents the model behind the search form of `frontend\models\ResepDokterRacikanDetail`.
 */
class ResepDokterRacikanDetailSearch extends ResepDokterRacikanDetail
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['no_resep', 'no_racik', 'kode_brng', 'kandungan'], 'safe'],
            [['p1', 'p2', 'jml'], 'number'],
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
        $query = ResepDokterRacikanDetail::find();

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
            'p1' => $this->p1,
            'p2' => $this->p2,
            'jml' => $this->jml,
        ]);

        $query->andFilterWhere(['like', 'no_resep', $this->no_resep])
            ->andFilterWhere(['like', 'no_racik', $this->no_racik])
            ->andFilterWhere(['like', 'kode_brng', $this->kode_brng])
            ->andFilterWhere(['like', 'kandungan', $this->kandungan]);

        return $dataProvider;
    }
}
