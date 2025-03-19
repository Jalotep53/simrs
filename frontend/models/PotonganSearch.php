<?php

namespace frontend\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use frontend\models\Potongan;

/**
 * PotonganSearch represents the model behind the search form of `frontend\models\Potongan`.
 */
class PotonganSearch extends Potongan
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['tahun', 'ktg'], 'safe'],
            [['bulan', 'id'], 'integer'],
            [['bpjs', 'jamsostek', 'dansos', 'simwajib', 'angkop', 'angla', 'telpri', 'pajak', 'pribadi', 'lain'], 'number'],
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
        $query = Potongan::find();

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
            'id' => $this->id,
            'bpjs' => $this->bpjs,
            'jamsostek' => $this->jamsostek,
            'dansos' => $this->dansos,
            'simwajib' => $this->simwajib,
            'angkop' => $this->angkop,
            'angla' => $this->angla,
            'telpri' => $this->telpri,
            'pajak' => $this->pajak,
            'pribadi' => $this->pribadi,
            'lain' => $this->lain,
        ]);

        $query->andFilterWhere(['like', 'ktg', $this->ktg]);

        return $dataProvider;
    }
}
