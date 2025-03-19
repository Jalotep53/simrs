<?php

namespace frontend\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use frontend\models\EvaluasiKinerja;

/**
 * EvaluasiKinerjaSearch represents the model behind the search form of `frontend\models\EvaluasiKinerja`.
 */
class EvaluasiKinerjaSearch extends EvaluasiKinerja
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['kode_evaluasi', 'nama_evaluasi'], 'safe'],
            [['indek'], 'integer'],
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
        $query = EvaluasiKinerja::find();

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
            'indek' => $this->indek,
        ]);

        $query->andFilterWhere(['like', 'kode_evaluasi', $this->kode_evaluasi])
            ->andFilterWhere(['like', 'nama_evaluasi', $this->nama_evaluasi]);

        return $dataProvider;
    }
}
