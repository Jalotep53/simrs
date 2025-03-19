<?php

namespace frontend\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use frontend\models\SkpDetailPenilaian;

/**
 * SkpDetailPenilaianSearch represents the model behind the search form of `frontend\models\SkpDetailPenilaian`.
 */
class SkpDetailPenilaianSearch extends SkpDetailPenilaian
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nomor_penilaian', 'kode_kriteria', 'skala_penilaian'], 'safe'],
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
        $query = SkpDetailPenilaian::find();

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
        $query->andFilterWhere(['like', 'nomor_penilaian', $this->nomor_penilaian])
            ->andFilterWhere(['like', 'kode_kriteria', $this->kode_kriteria])
            ->andFilterWhere(['like', 'skala_penilaian', $this->skala_penilaian]);

        return $dataProvider;
    }
}
