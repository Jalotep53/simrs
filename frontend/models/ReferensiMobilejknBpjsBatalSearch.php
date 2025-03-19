<?php

namespace frontend\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use frontend\models\ReferensiMobilejknBpjsBatal;

/**
 * ReferensiMobilejknBpjsBatalSearch represents the model behind the search form of `frontend\models\ReferensiMobilejknBpjsBatal`.
 */
class ReferensiMobilejknBpjsBatalSearch extends ReferensiMobilejknBpjsBatal
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['no_rkm_medis', 'no_rawat_batal', 'nomorreferensi', 'tanggalbatal', 'keterangan', 'statuskirim', 'nobooking'], 'safe'],
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
        $query = ReferensiMobilejknBpjsBatal::find();

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
            'tanggalbatal' => $this->tanggalbatal,
        ]);

        $query->andFilterWhere(['like', 'no_rkm_medis', $this->no_rkm_medis])
            ->andFilterWhere(['like', 'no_rawat_batal', $this->no_rawat_batal])
            ->andFilterWhere(['like', 'nomorreferensi', $this->nomorreferensi])
            ->andFilterWhere(['like', 'keterangan', $this->keterangan])
            ->andFilterWhere(['like', 'statuskirim', $this->statuskirim])
            ->andFilterWhere(['like', 'nobooking', $this->nobooking]);

        return $dataProvider;
    }
}
