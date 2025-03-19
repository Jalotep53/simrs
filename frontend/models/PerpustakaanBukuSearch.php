<?php

namespace frontend\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use frontend\models\PerpustakaanBuku;

/**
 * PerpustakaanBukuSearch represents the model behind the search form of `frontend\models\PerpustakaanBuku`.
 */
class PerpustakaanBukuSearch extends PerpustakaanBuku
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['kode_buku', 'judul_buku', 'jml_halaman', 'kode_penerbit', 'kode_pengarang', 'thn_terbit', 'isbn', 'id_kategori', 'id_jenis'], 'safe'],
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
        $query = PerpustakaanBuku::find();

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
            'thn_terbit' => $this->thn_terbit,
        ]);

        $query->andFilterWhere(['like', 'kode_buku', $this->kode_buku])
            ->andFilterWhere(['like', 'judul_buku', $this->judul_buku])
            ->andFilterWhere(['like', 'jml_halaman', $this->jml_halaman])
            ->andFilterWhere(['like', 'kode_penerbit', $this->kode_penerbit])
            ->andFilterWhere(['like', 'kode_pengarang', $this->kode_pengarang])
            ->andFilterWhere(['like', 'isbn', $this->isbn])
            ->andFilterWhere(['like', 'id_kategori', $this->id_kategori])
            ->andFilterWhere(['like', 'id_jenis', $this->id_jenis]);

        return $dataProvider;
    }
}
