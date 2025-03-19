<?php

namespace frontend\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use frontend\models\SetInsentif;

/**
 * SetInsentifSearch represents the model behind the search form of `frontend\models\SetInsentif`.
 */
class SetInsentifSearch extends SetInsentif
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['tahun'], 'safe'],
            [['bulan'], 'integer'],
            [['pendapatan', 'persen', 'total_insentif'], 'number'],
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
        $query = SetInsentif::find();

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
            'tahun' => $this->tahun,
            'bulan' => $this->bulan,
            'pendapatan' => $this->pendapatan,
            'persen' => $this->persen,
            'total_insentif' => $this->total_insentif,
        ]);

        return $dataProvider;
    }
}
