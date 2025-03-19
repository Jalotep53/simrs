<?php

namespace frontend\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use frontend\models\InventarisDetailHibah;

/**
 * InventarisDetailHibahSearch represents the model behind the search form of `frontend\models\InventarisDetailHibah`.
 */
class InventarisDetailHibahSearch extends InventarisDetailHibah
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['no_hibah', 'kode_barang'], 'safe'],
            [['jumlah', 'h_hibah', 'subtotalhibah'], 'number'],
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
        $query = InventarisDetailHibah::find();

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
            'jumlah' => $this->jumlah,
            'h_hibah' => $this->h_hibah,
            'subtotalhibah' => $this->subtotalhibah,
        ]);

        $query->andFilterWhere(['like', 'no_hibah', $this->no_hibah])
            ->andFilterWhere(['like', 'kode_barang', $this->kode_barang]);

        return $dataProvider;
    }
}
