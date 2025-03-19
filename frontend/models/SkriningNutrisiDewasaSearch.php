<?php

namespace frontend\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use frontend\models\SkriningNutrisiDewasa;

/**
 * SkriningNutrisiDewasaSearch represents the model behind the search form of `frontend\models\SkriningNutrisiDewasa`.
 */
class SkriningNutrisiDewasaSearch extends SkriningNutrisiDewasa
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['no_rawat', 'tanggal', 'td', 'hr', 'rr', 'suhu', 'bb', 'tbpb', 'spo2', 'alergi', 'sg1', 'nilai1', 'sg2', 'nilai2', 'nip'], 'safe'],
            [['total_hasil'], 'integer'],
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
        $query = SkriningNutrisiDewasa::find();

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
            'total_hasil' => $this->total_hasil,
        ]);

        $query->andFilterWhere(['like', 'no_rawat', $this->no_rawat])
            ->andFilterWhere(['like', 'td', $this->td])
            ->andFilterWhere(['like', 'hr', $this->hr])
            ->andFilterWhere(['like', 'rr', $this->rr])
            ->andFilterWhere(['like', 'suhu', $this->suhu])
            ->andFilterWhere(['like', 'bb', $this->bb])
            ->andFilterWhere(['like', 'tbpb', $this->tbpb])
            ->andFilterWhere(['like', 'spo2', $this->spo2])
            ->andFilterWhere(['like', 'alergi', $this->alergi])
            ->andFilterWhere(['like', 'sg1', $this->sg1])
            ->andFilterWhere(['like', 'nilai1', $this->nilai1])
            ->andFilterWhere(['like', 'sg2', $this->sg2])
            ->andFilterWhere(['like', 'nilai2', $this->nilai2])
            ->andFilterWhere(['like', 'nip', $this->nip]);

        return $dataProvider;
    }
}
