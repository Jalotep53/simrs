<?php

namespace frontend\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use frontend\models\DetailPengeluaranObatBhp;

/**
 * DetailPengeluaranObatBhpSearch represents the model behind the search form of `frontend\models\DetailPengeluaranObatBhp`.
 */
class DetailPengeluaranObatBhpSearch extends DetailPengeluaranObatBhp
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['no_keluar', 'kode_brng', 'kode_sat', 'no_batch', 'no_faktur'], 'safe'],
            [['jumlah', 'harga_beli', 'total'], 'number'],
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
        $query = DetailPengeluaranObatBhp::find();

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
            'harga_beli' => $this->harga_beli,
            'total' => $this->total,
        ]);

        $query->andFilterWhere(['like', 'no_keluar', $this->no_keluar])
            ->andFilterWhere(['like', 'kode_brng', $this->kode_brng])
            ->andFilterWhere(['like', 'kode_sat', $this->kode_sat])
            ->andFilterWhere(['like', 'no_batch', $this->no_batch])
            ->andFilterWhere(['like', 'no_faktur', $this->no_faktur]);

        return $dataProvider;
    }
}
