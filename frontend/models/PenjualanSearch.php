<?php

namespace frontend\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use frontend\models\Penjualan;

/**
 * PenjualanSearch represents the model behind the search form of `frontend\models\Penjualan`.
 */
class PenjualanSearch extends Penjualan
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nota_jual', 'tgl_jual', 'nip', 'no_rkm_medis', 'nm_pasien', 'keterangan', 'jns_jual', 'status', 'kd_bangsal', 'kd_rek', 'nama_bayar'], 'safe'],
            [['ongkir', 'ppn'], 'number'],
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
        $query = Penjualan::find();

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
        ]);

        $query->andFilterWhere(['like', 'nota_jual', $this->nota_jual])
            ->andFilterWhere(['like', 'nip', $this->nip])
            ->andFilterWhere(['like', 'no_rkm_medis', $this->no_rkm_medis])
            ->andFilterWhere(['like', 'nm_pasien', $this->nm_pasien])
            ->andFilterWhere(['like', 'keterangan', $this->keterangan])
            ->andFilterWhere(['like', 'jns_jual', $this->jns_jual])
            ->andFilterWhere(['like', 'status', $this->status])
            ->andFilterWhere(['like', 'kd_bangsal', $this->kd_bangsal])
            ->andFilterWhere(['like', 'kd_rek', $this->kd_rek])
            ->andFilterWhere(['like', 'nama_bayar', $this->nama_bayar]);

        return $dataProvider;
    }
}
