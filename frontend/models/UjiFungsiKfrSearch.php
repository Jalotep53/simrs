<?php

namespace frontend\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use frontend\models\UjiFungsiKfr;

/**
 * UjiFungsiKfrSearch represents the model behind the search form of `frontend\models\UjiFungsiKfr`.
 */
class UjiFungsiKfrSearch extends UjiFungsiKfr
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['no_rawat', 'tanggal', 'diagnosis_fungsional', 'diagnosis_medis', 'hasil_didapat', 'kesimpulan', 'rekomedasi', 'kd_dokter'], 'safe'],
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
        $query = UjiFungsiKfr::find();

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

        $query->andFilterWhere(['like', 'no_rawat', $this->no_rawat])
            ->andFilterWhere(['like', 'diagnosis_fungsional', $this->diagnosis_fungsional])
            ->andFilterWhere(['like', 'diagnosis_medis', $this->diagnosis_medis])
            ->andFilterWhere(['like', 'hasil_didapat', $this->hasil_didapat])
            ->andFilterWhere(['like', 'kesimpulan', $this->kesimpulan])
            ->andFilterWhere(['like', 'rekomedasi', $this->rekomedasi])
            ->andFilterWhere(['like', 'kd_dokter', $this->kd_dokter]);

        return $dataProvider;
    }
}
