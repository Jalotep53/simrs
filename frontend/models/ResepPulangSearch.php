<?php

namespace frontend\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use frontend\models\ResepPulang;

/**
 * ResepPulangSearch represents the model behind the search form of `frontend\models\ResepPulang`.
 */
class ResepPulangSearch extends ResepPulang
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['no_rawat', 'kode_brng', 'dosis', 'tanggal', 'jam', 'kd_bangsal', 'no_batch', 'no_faktur'], 'safe'],
            [['jml_barang', 'harga', 'total'], 'number'],
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
        $query = ResepPulang::find();

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
            'jml_barang' => $this->jml_barang,
            'harga' => $this->harga,
            'total' => $this->total,
            'tanggal' => $this->tanggal,
            'jam' => $this->jam,
        ]);

        $query->andFilterWhere(['like', 'no_rawat', $this->no_rawat])
            ->andFilterWhere(['like', 'kode_brng', $this->kode_brng])
            ->andFilterWhere(['like', 'dosis', $this->dosis])
            ->andFilterWhere(['like', 'kd_bangsal', $this->kd_bangsal])
            ->andFilterWhere(['like', 'no_batch', $this->no_batch])
            ->andFilterWhere(['like', 'no_faktur', $this->no_faktur]);

        return $dataProvider;
    }
}
