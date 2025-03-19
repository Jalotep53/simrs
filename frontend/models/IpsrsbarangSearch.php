<?php

namespace frontend\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use frontend\models\Ipsrsbarang;

/**
 * IpsrsbarangSearch represents the model behind the search form of `frontend\models\Ipsrsbarang`.
 */
class IpsrsbarangSearch extends Ipsrsbarang
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['kode_brng', 'nama_brng', 'kode_sat', 'jenis', 'status'], 'safe'],
            [['stok', 'harga'], 'number'],
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
        $query = Ipsrsbarang::find();

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
            'stok' => $this->stok,
            'harga' => $this->harga,
        ]);

        $query->andFilterWhere(['like', 'kode_brng', $this->kode_brng])
            ->andFilterWhere(['like', 'nama_brng', $this->nama_brng])
            ->andFilterWhere(['like', 'kode_sat', $this->kode_sat])
            ->andFilterWhere(['like', 'jenis', $this->jenis])
            ->andFilterWhere(['like', 'status', $this->status]);

        return $dataProvider;
    }
}
