<?php

namespace frontend\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use frontend\models\RekonsiliasiObat;

/**
 * RekonsiliasiObatSearch represents the model behind the search form of `frontend\models\RekonsiliasiObat`.
 */
class RekonsiliasiObatSearch extends RekonsiliasiObat
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['no_rekonsiliasi', 'no_rawat', 'tanggal_wawancara', 'rekonsiliasi_obat_saat', 'alergi_obat', 'manifestasi_alergi', 'dampak_alergi', 'nip'], 'safe'],
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
        $query = RekonsiliasiObat::find();

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
            'tanggal_wawancara' => $this->tanggal_wawancara,
        ]);

        $query->andFilterWhere(['like', 'no_rekonsiliasi', $this->no_rekonsiliasi])
            ->andFilterWhere(['like', 'no_rawat', $this->no_rawat])
            ->andFilterWhere(['like', 'rekonsiliasi_obat_saat', $this->rekonsiliasi_obat_saat])
            ->andFilterWhere(['like', 'alergi_obat', $this->alergi_obat])
            ->andFilterWhere(['like', 'manifestasi_alergi', $this->manifestasi_alergi])
            ->andFilterWhere(['like', 'dampak_alergi', $this->dampak_alergi])
            ->andFilterWhere(['like', 'nip', $this->nip]);

        return $dataProvider;
    }
}
