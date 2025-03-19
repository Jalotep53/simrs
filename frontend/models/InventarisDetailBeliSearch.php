<?php

namespace frontend\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use frontend\models\InventarisDetailBeli;

/**
 * InventarisDetailBeliSearch represents the model behind the search form of `frontend\models\InventarisDetailBeli`.
 */
class InventarisDetailBeliSearch extends InventarisDetailBeli
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['no_faktur', 'kode_barang'], 'safe'],
            [['jumlah', 'harga', 'subtotal', 'dis', 'besardis', 'total'], 'number'],
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
        $query = InventarisDetailBeli::find();

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
            'harga' => $this->harga,
            'subtotal' => $this->subtotal,
            'dis' => $this->dis,
            'besardis' => $this->besardis,
            'total' => $this->total,
        ]);

        $query->andFilterWhere(['like', 'no_faktur', $this->no_faktur])
            ->andFilterWhere(['like', 'kode_barang', $this->kode_barang]);

        return $dataProvider;
    }
}
