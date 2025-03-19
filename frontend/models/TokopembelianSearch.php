<?php

namespace frontend\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use frontend\models\Tokopembelian;

/**
 * TokopembelianSearch represents the model behind the search form of `frontend\models\Tokopembelian`.
 */
class TokopembelianSearch extends Tokopembelian
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['no_faktur', 'kode_suplier', 'nip', 'tgl_beli', 'kd_rek'], 'safe'],
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
        $query = Tokopembelian::find();

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
            'tgl_beli' => $this->tgl_beli,
            'subtotal' => $this->subtotal,
            'potongan' => $this->potongan,
            'total' => $this->total,
            'ppn' => $this->ppn,
            'meterai' => $this->meterai,
            'tagihan' => $this->tagihan,
        ]);

        $query->andFilterWhere(['like', 'no_faktur', $this->no_faktur])
            ->andFilterWhere(['like', 'kode_suplier', $this->kode_suplier])
            ->andFilterWhere(['like', 'nip', $this->nip])
            ->andFilterWhere(['like', 'kd_rek', $this->kd_rek]);

        return $dataProvider;
    }
}
