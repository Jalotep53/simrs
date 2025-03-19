<?php

namespace frontend\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use frontend\models\DataBatch;

/**
 * DataBatchSearch represents the model behind the search form of `frontend\models\DataBatch`.
 */
class DataBatchSearch extends DataBatch
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['no_batch', 'kode_brng', 'tgl_beli', 'tgl_kadaluarsa', 'asal', 'no_faktur'], 'safe'],
            [['dasar', 'h_beli', 'ralan', 'kelas1', 'kelas2', 'kelas3', 'utama', 'vip', 'vvip', 'beliluar', 'jualbebas', 'karyawan', 'jumlahbeli', 'sisa'], 'number'],
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
        $query = DataBatch::find();

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
            'tgl_beli' => $this->tgl_beli,
            'tgl_kadaluarsa' => $this->tgl_kadaluarsa,
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
            'jumlahbeli' => $this->jumlahbeli,
            'sisa' => $this->sisa,
        ]);

        $query->andFilterWhere(['like', 'no_batch', $this->no_batch])
            ->andFilterWhere(['like', 'kode_brng', $this->kode_brng])
            ->andFilterWhere(['like', 'asal', $this->asal])
            ->andFilterWhere(['like', 'no_faktur', $this->no_faktur]);

        return $dataProvider;
    }
}
