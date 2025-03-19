<?php

namespace frontend\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use frontend\models\SuratSkbn;

/**
 * SuratSkbnSearch represents the model behind the search form of `frontend\models\SuratSkbn`.
 */
class SuratSkbnSearch extends SuratSkbn
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['no_surat', 'no_rawat', 'tanggalsurat', 'kategori', 'kd_dokter', 'keperluan', 'opiat', 'ganja', 'amphetamin', 'methamphetamin', 'benzodiazepin', 'cocain'], 'safe'],
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
        $query = SuratSkbn::find();

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
            'tanggalsurat' => $this->tanggalsurat,
        ]);

        $query->andFilterWhere(['like', 'no_surat', $this->no_surat])
            ->andFilterWhere(['like', 'no_rawat', $this->no_rawat])
            ->andFilterWhere(['like', 'kategori', $this->kategori])
            ->andFilterWhere(['like', 'kd_dokter', $this->kd_dokter])
            ->andFilterWhere(['like', 'keperluan', $this->keperluan])
            ->andFilterWhere(['like', 'opiat', $this->opiat])
            ->andFilterWhere(['like', 'ganja', $this->ganja])
            ->andFilterWhere(['like', 'amphetamin', $this->amphetamin])
            ->andFilterWhere(['like', 'methamphetamin', $this->methamphetamin])
            ->andFilterWhere(['like', 'benzodiazepin', $this->benzodiazepin])
            ->andFilterWhere(['like', 'cocain', $this->cocain]);

        return $dataProvider;
    }
}
