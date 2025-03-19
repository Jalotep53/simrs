<?php

namespace frontend\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use frontend\models\Tokopenjualan;

/**
 * TokopenjualanSearch represents the model behind the search form of `frontend\models\Tokopenjualan`.
 */
class TokopenjualanSearch extends Tokopenjualan
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nota_jual', 'tgl_jual', 'nip', 'no_member', 'nm_member', 'keterangan', 'jns_jual', 'kd_rek', 'nama_bayar'], 'safe'],
            [['ongkir', 'ppn', 'total'], 'number'],
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
        $query = Tokopenjualan::find();

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
            'tgl_jual' => $this->tgl_jual,
            'ongkir' => $this->ongkir,
            'ppn' => $this->ppn,
            'total' => $this->total,
        ]);

        $query->andFilterWhere(['like', 'nota_jual', $this->nota_jual])
            ->andFilterWhere(['like', 'nip', $this->nip])
            ->andFilterWhere(['like', 'no_member', $this->no_member])
            ->andFilterWhere(['like', 'nm_member', $this->nm_member])
            ->andFilterWhere(['like', 'keterangan', $this->keterangan])
            ->andFilterWhere(['like', 'jns_jual', $this->jns_jual])
            ->andFilterWhere(['like', 'kd_rek', $this->kd_rek])
            ->andFilterWhere(['like', 'nama_bayar', $this->nama_bayar]);

        return $dataProvider;
    }
}
