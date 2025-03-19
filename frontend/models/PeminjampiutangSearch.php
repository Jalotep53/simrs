<?php

namespace frontend\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use frontend\models\Peminjampiutang;

/**
 * PeminjampiutangSearch represents the model behind the search form of `frontend\models\Peminjampiutang`.
 */
class PeminjampiutangSearch extends Peminjampiutang
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['kode_peminjam', 'nama_peminjam', 'alamat', 'no_telp', 'kd_rek', 'status'], 'safe'],
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
        $query = Peminjampiutang::find();

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
        $query->andFilterWhere(['like', 'kode_peminjam', $this->kode_peminjam])
            ->andFilterWhere(['like', 'nama_peminjam', $this->nama_peminjam])
            ->andFilterWhere(['like', 'alamat', $this->alamat])
            ->andFilterWhere(['like', 'no_telp', $this->no_telp])
            ->andFilterWhere(['like', 'kd_rek', $this->kd_rek])
            ->andFilterWhere(['like', 'status', $this->status]);

        return $dataProvider;
    }
}
