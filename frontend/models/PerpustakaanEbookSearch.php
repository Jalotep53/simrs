<?php

namespace frontend\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use frontend\models\PerpustakaanEbook;

/**
 * PerpustakaanEbookSearch represents the model behind the search form of `frontend\models\PerpustakaanEbook`.
 */
class PerpustakaanEbookSearch extends PerpustakaanEbook
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['kode_ebook', 'judul_ebook', 'jml_halaman', 'kode_penerbit', 'kode_pengarang', 'thn_terbit', 'id_kategori', 'id_jenis', 'berkas'], 'safe'],
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
        $query = PerpustakaanEbook::find();

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

        $query->andFilterWhere(['like', 'kode_ebook', $this->kode_ebook])
            ->andFilterWhere(['like', 'judul_ebook', $this->judul_ebook])
            ->andFilterWhere(['like', 'jml_halaman', $this->jml_halaman])
            ->andFilterWhere(['like', 'kode_penerbit', $this->kode_penerbit])
            ->andFilterWhere(['like', 'kode_pengarang', $this->kode_pengarang])
            ->andFilterWhere(['like', 'id_kategori', $this->id_kategori])
            ->andFilterWhere(['like', 'id_jenis', $this->id_jenis])
            ->andFilterWhere(['like', 'berkas', $this->berkas]);

        return $dataProvider;
    }
}
