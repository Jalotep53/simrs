<?php

namespace frontend\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use frontend\models\IpsrsDetailHibah;

/**
 * IpsrsDetailHibahSearch represents the model behind the search form of `frontend\models\IpsrsDetailHibah`.
 */
class IpsrsDetailHibahSearch extends IpsrsDetailHibah
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['no_hibah', 'kode_brng', 'kode_sat'], 'safe'],
            [['jumlah', 'h_hibah', 'subtotalhibah'], 'number'],
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
        $query = IpsrsDetailHibah::find();

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
            'jumlah' => $this->jumlah,
            'h_hibah' => $this->h_hibah,
            'subtotalhibah' => $this->subtotalhibah,
        ]);

        $query->andFilterWhere(['like', 'no_hibah', $this->no_hibah])
            ->andFilterWhere(['like', 'kode_brng', $this->kode_brng])
            ->andFilterWhere(['like', 'kode_sat', $this->kode_sat]);

        return $dataProvider;
    }
}
