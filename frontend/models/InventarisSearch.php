<?php

namespace frontend\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use frontend\models\Inventaris;

/**
 * InventarisSearch represents the model behind the search form of `frontend\models\Inventaris`.
 */
class InventarisSearch extends Inventaris
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['no_inventaris', 'kode_barang', 'asal_barang', 'tgl_pengadaan', 'status_barang', 'id_ruang', 'no_rak', 'no_box'], 'safe'],
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
        $query = Inventaris::find();

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
            ->andFilterWhere(['like', 'kode_barang', $this->kode_barang])
            ->andFilterWhere(['like', 'asal_barang', $this->asal_barang])
            ->andFilterWhere(['like', 'status_barang', $this->status_barang])
            ->andFilterWhere(['like', 'id_ruang', $this->id_ruang])
            ->andFilterWhere(['like', 'no_rak', $this->no_rak])
            ->andFilterWhere(['like', 'no_box', $this->no_box]);

        return $dataProvider;
    }
}
