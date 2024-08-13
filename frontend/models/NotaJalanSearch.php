<?php

namespace frontend\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use frontend\models\NotaJalan;

/**
 * NotaJalanSearch represents the model behind the search form of `frontend\models\NotaJalan`.
 */
class NotaJalanSearch extends NotaJalan
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['no_rawat', 'no_nota', 'tanggal', 'jam'], 'safe'],
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
        $query = NotaJalan::find();

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
            'jam' => $this->jam,
        ]);

        $query->andFilterWhere(['like', 'no_rawat', $this->no_rawat])
            ->andFilterWhere(['like', 'no_nota', $this->no_nota]);

        return $dataProvider;
    }
}
