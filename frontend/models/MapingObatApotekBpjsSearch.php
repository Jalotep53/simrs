<?php

namespace frontend\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use frontend\models\MapingObatApotekBpjs;

/**
 * MapingObatApotekBpjsSearch represents the model behind the search form of `frontend\models\MapingObatApotekBpjs`.
 */
class MapingObatApotekBpjsSearch extends MapingObatApotekBpjs
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['kode_brng', 'kode_brng_apotek_bpjs', 'nama_brng_apotek_bpjs'], 'safe'],
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
        $query = MapingObatApotekBpjs::find();

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
        $query->andFilterWhere(['like', 'kode_brng', $this->kode_brng])
            ->andFilterWhere(['like', 'kode_brng_apotek_bpjs', $this->kode_brng_apotek_bpjs])
            ->andFilterWhere(['like', 'nama_brng_apotek_bpjs', $this->nama_brng_apotek_bpjs]);

        return $dataProvider;
    }
}
