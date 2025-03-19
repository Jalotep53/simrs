<?php

namespace frontend\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use frontend\models\Tampbeli1;

/**
 * Tampbeli1Search represents the model behind the search form of `frontend\models\Tampbeli1`.
 */
class Tampbeli1Search extends Tampbeli1
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['kode_brng', 'nama_brng', 'satuan', 'satuan_stok'], 'safe'],
            [['h_beli', 'jumlah', 'jumlah_stok', 'total'], 'number'],
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
        $query = Tampbeli1::find();

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
            'h_beli' => $this->h_beli,
            'jumlah' => $this->jumlah,
            'jumlah_stok' => $this->jumlah_stok,
            'total' => $this->total,
        ]);

        $query->andFilterWhere(['like', 'kode_brng', $this->kode_brng])
            ->andFilterWhere(['like', 'nama_brng', $this->nama_brng])
            ->andFilterWhere(['like', 'satuan', $this->satuan])
            ->andFilterWhere(['like', 'satuan_stok', $this->satuan_stok]);

        return $dataProvider;
    }
}
