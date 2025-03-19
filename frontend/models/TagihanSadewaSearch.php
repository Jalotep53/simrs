<?php

namespace frontend\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use frontend\models\TagihanSadewa;

/**
 * TagihanSadewaSearch represents the model behind the search form of `frontend\models\TagihanSadewa`.
 */
class TagihanSadewaSearch extends TagihanSadewa
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['no_nota', 'no_rkm_medis', 'nama_pasien', 'alamat', 'tgl_bayar', 'jenis_bayar', 'status', 'petugas'], 'safe'],
            [['jumlah_tagihan', 'jumlah_bayar'], 'number'],
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
        $query = TagihanSadewa::find();

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
            'jumlah_tagihan' => $this->jumlah_tagihan,
            'jumlah_bayar' => $this->jumlah_bayar,
        ]);

        $query->andFilterWhere(['like', 'no_nota', $this->no_nota])
            ->andFilterWhere(['like', 'no_rkm_medis', $this->no_rkm_medis])
            ->andFilterWhere(['like', 'nama_pasien', $this->nama_pasien])
            ->andFilterWhere(['like', 'alamat', $this->alamat])
            ->andFilterWhere(['like', 'jenis_bayar', $this->jenis_bayar])
            ->andFilterWhere(['like', 'status', $this->status])
            ->andFilterWhere(['like', 'petugas', $this->petugas]);

        return $dataProvider;
    }
}
