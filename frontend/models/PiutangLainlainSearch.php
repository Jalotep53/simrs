<?php

namespace frontend\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use frontend\models\PiutangLainlain;

/**
 * PiutangLainlainSearch represents the model behind the search form of `frontend\models\PiutangLainlain`.
 */
class PiutangLainlainSearch extends PiutangLainlain
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nota_piutang', 'tgl_piutang', 'nip', 'kode_peminjam', 'kd_rek', 'nama_bayar', 'keterangan', 'tgltempo', 'status'], 'safe'],
            [['nominal', 'sisapiutang'], 'number'],
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
        $query = PiutangLainlain::find();

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
            'tgl_piutang' => $this->tgl_piutang,
            'tgltempo' => $this->tgltempo,
            'nominal' => $this->nominal,
            'sisapiutang' => $this->sisapiutang,
        ]);

        $query->andFilterWhere(['like', 'nota_piutang', $this->nota_piutang])
            ->andFilterWhere(['like', 'nip', $this->nip])
            ->andFilterWhere(['like', 'kode_peminjam', $this->kode_peminjam])
            ->andFilterWhere(['like', 'kd_rek', $this->kd_rek])
            ->andFilterWhere(['like', 'nama_bayar', $this->nama_bayar])
            ->andFilterWhere(['like', 'keterangan', $this->keterangan])
            ->andFilterWhere(['like', 'status', $this->status]);

        return $dataProvider;
    }
}
