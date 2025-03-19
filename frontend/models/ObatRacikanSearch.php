<?php

namespace frontend\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use frontend\models\ObatRacikan;

/**
 * ObatRacikanSearch represents the model behind the search form of `frontend\models\ObatRacikan`.
 */
class ObatRacikanSearch extends ObatRacikan
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['tgl_perawatan', 'jam', 'no_rawat', 'no_racik', 'nama_racik', 'kd_racik', 'aturan_pakai', 'keterangan'], 'safe'],
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
        $query = ObatRacikan::find();

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
            'jml_dr' => $this->jml_dr,
        ]);

        $query->andFilterWhere(['like', 'no_rawat', $this->no_rawat])
            ->andFilterWhere(['like', 'no_racik', $this->no_racik])
            ->andFilterWhere(['like', 'nama_racik', $this->nama_racik])
            ->andFilterWhere(['like', 'kd_racik', $this->kd_racik])
            ->andFilterWhere(['like', 'aturan_pakai', $this->aturan_pakai])
            ->andFilterWhere(['like', 'keterangan', $this->keterangan]);

        return $dataProvider;
    }
}
