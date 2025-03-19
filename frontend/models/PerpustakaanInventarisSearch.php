<?php

namespace frontend\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use frontend\models\PerpustakaanInventaris;

/**
 * PerpustakaanInventarisSearch represents the model behind the search form of `frontend\models\PerpustakaanInventaris`.
 */
class PerpustakaanInventarisSearch extends PerpustakaanInventaris
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['no_inventaris', 'kode_buku', 'asal_buku', 'tgl_pengadaan', 'status_buku', 'kd_ruang', 'no_rak', 'no_box'], 'safe'],
            [['harga'], 'number'],
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
        $query = PerpustakaanInventaris::find();

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
            'tgl_pengadaan' => $this->tgl_pengadaan,
            'harga' => $this->harga,
        ]);

        $query->andFilterWhere(['like', 'no_inventaris', $this->no_inventaris])
            ->andFilterWhere(['like', 'kode_buku', $this->kode_buku])
            ->andFilterWhere(['like', 'asal_buku', $this->asal_buku])
            ->andFilterWhere(['like', 'status_buku', $this->status_buku])
            ->andFilterWhere(['like', 'kd_ruang', $this->kd_ruang])
            ->andFilterWhere(['like', 'no_rak', $this->no_rak])
            ->andFilterWhere(['like', 'no_box', $this->no_box]);

        return $dataProvider;
    }
}
