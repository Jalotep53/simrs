<?php

namespace frontend\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use frontend\models\ResepLuarObat;

/**
 * ResepLuarObatSearch represents the model behind the search form of `frontend\models\ResepLuarObat`.
 */
class ResepLuarObatSearch extends ResepLuarObat
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['no_resep', 'kode_brng', 'aturan_pakai'], 'safe'],
            [['jml'], 'number'],
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
        $query = ResepLuarObat::find();

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
            'jml' => $this->jml,
        ]);

        $query->andFilterWhere(['like', 'no_resep', $this->no_resep])
            ->andFilterWhere(['like', 'kode_brng', $this->kode_brng])
            ->andFilterWhere(['like', 'aturan_pakai', $this->aturan_pakai]);

        return $dataProvider;
    }
}
