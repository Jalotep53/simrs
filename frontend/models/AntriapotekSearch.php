<?php

namespace frontend\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use frontend\models\SuratSubKlasifikasi;

/**
 * AntriapotekSearch represents the model behind the search form of `frontend\models\SuratSubKlasifikasi`.
 */
class AntriapotekSearch extends SuratSubKlasifikasi
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['kd', 'kd_klasifikasi', 'sub_klasifikasi'], 'safe'],
            [['no_bulanan', 'no_tahunan', 'bulan', 'tahun'], 'integer'],
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
        $query = SuratSubKlasifikasi::find();

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
            'no_bulanan' => $this->no_bulanan,
            'no_tahunan' => $this->no_tahunan,
            'bulan' => $this->bulan,
            'tahun' => $this->tahun,
        ]);

        $query->andFilterWhere(['like', 'kd', $this->kd])
            ->andFilterWhere(['like', 'kd_klasifikasi', $this->kd_klasifikasi])
            ->andFilterWhere(['like', 'sub_klasifikasi', $this->sub_klasifikasi]);

        return $dataProvider;
    }
}
