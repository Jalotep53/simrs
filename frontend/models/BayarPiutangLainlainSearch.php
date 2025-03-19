<?php

namespace frontend\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use frontend\models\BayarPiutangLainlain;

/**
 * BayarPiutangLainlainSearch represents the model behind the search form of `frontend\models\BayarPiutangLainlain`.
 */
class BayarPiutangLainlainSearch extends BayarPiutangLainlain
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['tgl_bayar', 'kode_peminjam', 'keterangan', 'nota_piutang', 'kd_rek', 'nama_bayar'], 'safe'],
            [['besar_cicilan'], 'number'],
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
        $query = BayarPiutangLainlain::find();

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
            'tgl_bayar' => $this->tgl_bayar,
            'besar_cicilan' => $this->besar_cicilan,
        ]);

        $query->andFilterWhere(['like', 'kode_peminjam', $this->kode_peminjam])
            ->andFilterWhere(['like', 'keterangan', $this->keterangan])
            ->andFilterWhere(['like', 'nota_piutang', $this->nota_piutang])
            ->andFilterWhere(['like', 'kd_rek', $this->kd_rek])
            ->andFilterWhere(['like', 'nama_bayar', $this->nama_bayar]);

        return $dataProvider;
    }
}
