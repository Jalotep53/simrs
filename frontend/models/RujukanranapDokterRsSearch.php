<?php

namespace frontend\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use frontend\models\RujukanranapDokterRs;

/**
 * RujukanranapDokterRsSearch represents the model behind the search form of `frontend\models\RujukanranapDokterRs`.
 */
class RujukanranapDokterRsSearch extends RujukanranapDokterRs
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['tanggal', 'kd_dokter', 'no_rkm_medis', 'kd_kamar'], 'safe'],
            [['jasarujuk'], 'number'],
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
        $query = RujukanranapDokterRs::find();

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
            'jasarujuk' => $this->jasarujuk,
        ]);

        $query->andFilterWhere(['like', 'kd_dokter', $this->kd_dokter])
            ->andFilterWhere(['like', 'no_rkm_medis', $this->no_rkm_medis])
            ->andFilterWhere(['like', 'kd_kamar', $this->kd_kamar]);

        return $dataProvider;
    }
}
