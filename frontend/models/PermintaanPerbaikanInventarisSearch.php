<?php

namespace frontend\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use frontend\models\PermintaanPerbaikanInventaris;

/**
 * PermintaanPerbaikanInventarisSearch represents the model behind the search form of `frontend\models\PermintaanPerbaikanInventaris`.
 */
class PermintaanPerbaikanInventarisSearch extends PermintaanPerbaikanInventaris
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['no_permintaan', 'no_inventaris', 'nik', 'tanggal', 'deskripsi_kerusakan'], 'safe'],
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
        $query = PermintaanPerbaikanInventaris::find();

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
        ]);

        $query->andFilterWhere(['like', 'no_permintaan', $this->no_permintaan])
            ->andFilterWhere(['like', 'no_inventaris', $this->no_inventaris])
            ->andFilterWhere(['like', 'nik', $this->nik])
            ->andFilterWhere(['like', 'deskripsi_kerusakan', $this->deskripsi_kerusakan]);

        return $dataProvider;
    }
}
