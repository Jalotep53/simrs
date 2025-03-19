<?php

namespace frontend\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use frontend\models\PerpustakaanPenerbit;

/**
 * PerpustakaanPenerbitSearch represents the model behind the search form of `frontend\models\PerpustakaanPenerbit`.
 */
class PerpustakaanPenerbitSearch extends PerpustakaanPenerbit
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['kode_penerbit', 'nama_penerbit', 'alamat_penerbit', 'no_telp', 'email', 'website_penerbit'], 'safe'],
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
        $query = PerpustakaanPenerbit::find();

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
        $query->andFilterWhere(['like', 'kode_penerbit', $this->kode_penerbit])
            ->andFilterWhere(['like', 'nama_penerbit', $this->nama_penerbit])
            ->andFilterWhere(['like', 'alamat_penerbit', $this->alamat_penerbit])
            ->andFilterWhere(['like', 'no_telp', $this->no_telp])
            ->andFilterWhere(['like', 'email', $this->email])
            ->andFilterWhere(['like', 'website_penerbit', $this->website_penerbit]);

        return $dataProvider;
    }
}
