<?php

namespace frontend\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use frontend\models\TokoSuratPemesanan;

/**
 * TokoSuratPemesananSearch represents the model behind the search form of `frontend\models\TokoSuratPemesanan`.
 */
class TokoSuratPemesananSearch extends TokoSuratPemesanan
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['no_pemesanan', 'kode_suplier', 'nip', 'tanggal', 'status'], 'safe'],
            [['subtotal', 'potongan', 'total', 'ppn', 'meterai', 'tagihan'], 'number'],
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
        $query = TokoSuratPemesanan::find();

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
            'subtotal' => $this->subtotal,
            'potongan' => $this->potongan,
            'total' => $this->total,
            'ppn' => $this->ppn,
            'meterai' => $this->meterai,
            'tagihan' => $this->tagihan,
        ]);

        $query->andFilterWhere(['like', 'no_pemesanan', $this->no_pemesanan])
            ->andFilterWhere(['like', 'kode_suplier', $this->kode_suplier])
            ->andFilterWhere(['like', 'nip', $this->nip])
            ->andFilterWhere(['like', 'status', $this->status]);

        return $dataProvider;
    }
}
