<?php

namespace frontend\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use frontend\models\PcareObatDiberikan;

/**
 * PcareObatDiberikanSearch represents the model behind the search form of `frontend\models\PcareObatDiberikan`.
 */
class PcareObatDiberikanSearch extends PcareObatDiberikan
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['no_rawat', 'noKunjungan', 'kdObatSK', 'tgl_perawatan', 'jam', 'kode_brng', 'no_batch', 'no_faktur'], 'safe'],
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
        $query = PcareObatDiberikan::find();

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
            'tgl_perawatan' => $this->tgl_perawatan,
            'jam' => $this->jam,
        ]);

        $query->andFilterWhere(['like', 'no_rawat', $this->no_rawat])
            ->andFilterWhere(['like', 'noKunjungan', $this->noKunjungan])
            ->andFilterWhere(['like', 'kdObatSK', $this->kdObatSK])
            ->andFilterWhere(['like', 'kode_brng', $this->kode_brng])
            ->andFilterWhere(['like', 'no_batch', $this->no_batch])
            ->andFilterWhere(['like', 'no_faktur', $this->no_faktur]);

        return $dataProvider;
    }
}
