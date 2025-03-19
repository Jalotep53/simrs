<?php

namespace frontend\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use frontend\models\Mutasibarang;

/**
 * MutasibarangSearch represents the model behind the search form of `frontend\models\Mutasibarang`.
 */
class MutasibarangSearch extends Mutasibarang
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['kode_brng', 'kd_bangsaldari', 'kd_bangsalke', 'tanggal', 'keterangan', 'no_batch', 'no_faktur'], 'safe'],
            [['jml', 'harga'], 'number'],
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
        $query = Mutasibarang::find();

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
            'jml' => $this->jml,
            'harga' => $this->harga,
            'tanggal' => $this->tanggal,
        ]);

        $query->andFilterWhere(['like', 'kode_brng', $this->kode_brng])
            ->andFilterWhere(['like', 'kd_bangsaldari', $this->kd_bangsaldari])
            ->andFilterWhere(['like', 'kd_bangsalke', $this->kd_bangsalke])
            ->andFilterWhere(['like', 'keterangan', $this->keterangan])
            ->andFilterWhere(['like', 'no_batch', $this->no_batch])
            ->andFilterWhere(['like', 'no_faktur', $this->no_faktur]);

        return $dataProvider;
    }
}
