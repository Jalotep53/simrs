<?php

namespace frontend\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use frontend\models\ResepLuarRacikan;

/**
 * ResepLuarRacikanSearch represents the model behind the search form of `frontend\models\ResepLuarRacikan`.
 */
class ResepLuarRacikanSearch extends ResepLuarRacikan
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['no_resep', 'no_racik', 'nama_racik', 'kd_racik', 'aturan_pakai', 'keterangan'], 'safe'],
            [['jml_dr'], 'integer'],
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
        $query = ResepLuarRacikan::find();

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
            'jml_dr' => $this->jml_dr,
        ]);

        $query->andFilterWhere(['like', 'no_resep', $this->no_resep])
            ->andFilterWhere(['like', 'no_racik', $this->no_racik])
            ->andFilterWhere(['like', 'nama_racik', $this->nama_racik])
            ->andFilterWhere(['like', 'kd_racik', $this->kd_racik])
            ->andFilterWhere(['like', 'aturan_pakai', $this->aturan_pakai])
            ->andFilterWhere(['like', 'keterangan', $this->keterangan]);

        return $dataProvider;
    }
}
