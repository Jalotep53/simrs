<?php

namespace frontend\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use frontend\models\BayarPemesanan;

/**
 * BayarPemesananSearch represents the model behind the search form of `frontend\models\BayarPemesanan`.
 */
class BayarPemesananSearch extends BayarPemesanan
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['tgl_bayar', 'no_faktur', 'nip', 'keterangan', 'nama_bayar', 'no_bukti'], 'safe'],
            [['besar_bayar'], 'number'],
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
        $query = BayarPemesanan::find();

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
            'besar_bayar' => $this->besar_bayar,
        ]);

        $query->andFilterWhere(['like', 'no_faktur', $this->no_faktur])
            ->andFilterWhere(['like', 'nip', $this->nip])
            ->andFilterWhere(['like', 'keterangan', $this->keterangan])
            ->andFilterWhere(['like', 'nama_bayar', $this->nama_bayar])
            ->andFilterWhere(['like', 'no_bukti', $this->no_bukti]);

        return $dataProvider;
    }
}
