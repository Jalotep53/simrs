<?php

namespace frontend\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use frontend\models\Databarang;

/**
 * DatabarangSearch represents the model behind the search form of `frontend\models\Databarang`.
 */
class DatabarangSearch extends Databarang
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['kode_brng', 'nama_brng', 'kode_satbesar', 'kode_sat', 'letak_barang', 'kdjns', 'expire', 'status', 'kode_industri', 'kode_kategori', 'kode_golongan'], 'safe'],
            [['dasar', 'h_beli', 'ralan', 'kelas1', 'kelas2', 'kelas3', 'utama', 'vip', 'vvip', 'beliluar', 'jualbebas', 'karyawan', 'stokminimal', 'isi', 'kapasitas'], 'number'],
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
        $query = Databarang::find();

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
            'dasar' => $this->dasar,
            'h_beli' => $this->h_beli,
            'ralan' => $this->ralan,
            'kelas1' => $this->kelas1,
            'kelas2' => $this->kelas2,
            'kelas3' => $this->kelas3,
            'utama' => $this->utama,
            'vip' => $this->vip,
            'vvip' => $this->vvip,
            'beliluar' => $this->beliluar,
            'jualbebas' => $this->jualbebas,
            'karyawan' => $this->karyawan,
            'stokminimal' => $this->stokminimal,
            'isi' => $this->isi,
            'kapasitas' => $this->kapasitas,
            'expire' => $this->expire,
        ]);

        $query->andFilterWhere(['like', 'kode_brng', $this->kode_brng])
            ->andFilterWhere(['like', 'nama_brng', $this->nama_brng])
            ->andFilterWhere(['like', 'kode_satbesar', $this->kode_satbesar])
            ->andFilterWhere(['like', 'kode_sat', $this->kode_sat])
            ->andFilterWhere(['like', 'letak_barang', $this->letak_barang])
            ->andFilterWhere(['like', 'kdjns', $this->kdjns])
            ->andFilterWhere(['like', 'status', $this->status])
            ->andFilterWhere(['like', 'kode_industri', $this->kode_industri])
            ->andFilterWhere(['like', 'kode_kategori', $this->kode_kategori])
            ->andFilterWhere(['like', 'kode_golongan', $this->kode_golongan]);

        return $dataProvider;
    }
}
