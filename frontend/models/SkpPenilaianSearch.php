<?php

namespace frontend\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use frontend\models\SkpPenilaian;

/**
 * SkpPenilaianSearch represents the model behind the search form of `frontend\models\SkpPenilaian`.
 */
class SkpPenilaianSearch extends SkpPenilaian
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nomor_penilaian', 'nik_dinilai', 'nik_penilai', 'tanggal', 'keterangan', 'status'], 'safe'],
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
        $query = SkpPenilaian::find();

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

        $query->andFilterWhere(['like', 'nomor_penilaian', $this->nomor_penilaian])
            ->andFilterWhere(['like', 'nik_dinilai', $this->nik_dinilai])
            ->andFilterWhere(['like', 'nik_penilai', $this->nik_penilai])
            ->andFilterWhere(['like', 'keterangan', $this->keterangan])
            ->andFilterWhere(['like', 'status', $this->status]);

        return $dataProvider;
    }
}
