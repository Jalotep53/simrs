<?php

namespace frontend\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use frontend\models\SetAkte;

/**
 * SetAkteSearch represents the model behind the search form of `frontend\models\SetAkte`.
 */
class SetAkteSearch extends SetAkte
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['tahun'], 'safe'],
            [['bulan'], 'integer'],
            [['pendapatan_akte', 'persen_rs', 'bagian_rs', 'persen_kry', 'bagian_kry'], 'number'],
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
        $query = SetAkte::find();

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
            'pendapatan_akte' => $this->pendapatan_akte,
            'persen_rs' => $this->persen_rs,
            'bagian_rs' => $this->bagian_rs,
            'persen_kry' => $this->persen_kry,
            'bagian_kry' => $this->bagian_kry,
        ]);

        return $dataProvider;
    }
}
