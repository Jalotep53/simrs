<?php

namespace frontend\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use frontend\models\InventarisProdusen;

/**
 * InventarisProdusenSearch represents the model behind the search form of `frontend\models\InventarisProdusen`.
 */
class InventarisProdusenSearch extends InventarisProdusen
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['kode_produsen', 'nama_produsen', 'alamat_produsen', 'no_telp', 'email', 'website_produsen'], 'safe'],
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
        $query = InventarisProdusen::find();

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
        $query->andFilterWhere(['like', 'kode_produsen', $this->kode_produsen])
            ->andFilterWhere(['like', 'nama_produsen', $this->nama_produsen])
            ->andFilterWhere(['like', 'alamat_produsen', $this->alamat_produsen])
            ->andFilterWhere(['like', 'no_telp', $this->no_telp])
            ->andFilterWhere(['like', 'email', $this->email])
            ->andFilterWhere(['like', 'website_produsen', $this->website_produsen]);

        return $dataProvider;
    }
}
