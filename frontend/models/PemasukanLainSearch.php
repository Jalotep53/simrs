<?php

namespace frontend\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use frontend\models\PemasukanLain;

/**
 * PemasukanLainSearch represents the model behind the search form of `frontend\models\PemasukanLain`.
 */
class PemasukanLainSearch extends PemasukanLain
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['no_masuk', 'tanggal', 'kode_kategori', 'nip', 'keterangan', 'keperluan'], 'safe'],
            [['besar'], 'number'],
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
        $query = PemasukanLain::find();

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
            'tanggal' => $this->tanggal,
            'besar' => $this->besar,
        ]);

        $query->andFilterWhere(['like', 'no_masuk', $this->no_masuk])
            ->andFilterWhere(['like', 'kode_kategori', $this->kode_kategori])
            ->andFilterWhere(['like', 'nip', $this->nip])
            ->andFilterWhere(['like', 'keterangan', $this->keterangan])
            ->andFilterWhere(['like', 'keperluan', $this->keperluan]);

        return $dataProvider;
    }
}
