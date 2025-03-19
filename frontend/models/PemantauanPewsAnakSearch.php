<?php

namespace frontend\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use frontend\models\PemantauanPewsAnak;

/**
 * PemantauanPewsAnakSearch represents the model behind the search form of `frontend\models\PemantauanPewsAnak`.
 */
class PemantauanPewsAnakSearch extends PemantauanPewsAnak
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['no_rawat', 'tanggal', 'parameter_perilaku', 'skor_perilaku', 'parameter_crt_atau_warna_kulit', 'skor_crt_atau_warna_kulit', 'parameter_perespirasi', 'skor_perespirasi', 'skor_total', 'parameter_total', 'nip'], 'safe'],
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
        $query = PemantauanPewsAnak::find();

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
            ->andFilterWhere(['like', 'parameter_perilaku', $this->parameter_perilaku])
            ->andFilterWhere(['like', 'skor_perilaku', $this->skor_perilaku])
            ->andFilterWhere(['like', 'parameter_crt_atau_warna_kulit', $this->parameter_crt_atau_warna_kulit])
            ->andFilterWhere(['like', 'skor_crt_atau_warna_kulit', $this->skor_crt_atau_warna_kulit])
            ->andFilterWhere(['like', 'parameter_perespirasi', $this->parameter_perespirasi])
            ->andFilterWhere(['like', 'skor_perespirasi', $this->skor_perespirasi])
            ->andFilterWhere(['like', 'skor_total', $this->skor_total])
            ->andFilterWhere(['like', 'parameter_total', $this->parameter_total])
            ->andFilterWhere(['like', 'nip', $this->nip]);

        return $dataProvider;
    }
}
