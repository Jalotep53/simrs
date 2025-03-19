<?php

namespace frontend\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use frontend\models\SkdpBpjs;

/**
 * SkdpBpjsSearch represents the model behind the search form of `frontend\models\SkdpBpjs`.
 */
class SkdpBpjsSearch extends SkdpBpjs
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['tahun', 'no_rkm_medis', 'diagnosa', 'terapi', 'alasan1', 'alasan2', 'rtl1', 'rtl2', 'tanggal_datang', 'tanggal_rujukan', 'no_antrian', 'kd_dokter', 'status'], 'safe'],
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
        $query = SkdpBpjs::find();

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
            'tahun' => $this->tahun,
            'tanggal_datang' => $this->tanggal_datang,
            'tanggal_rujukan' => $this->tanggal_rujukan,
        ]);

        $query->andFilterWhere(['like', 'no_rkm_medis', $this->no_rkm_medis])
            ->andFilterWhere(['like', 'diagnosa', $this->diagnosa])
            ->andFilterWhere(['like', 'terapi', $this->terapi])
            ->andFilterWhere(['like', 'alasan1', $this->alasan1])
            ->andFilterWhere(['like', 'alasan2', $this->alasan2])
            ->andFilterWhere(['like', 'rtl1', $this->rtl1])
            ->andFilterWhere(['like', 'rtl2', $this->rtl2])
            ->andFilterWhere(['like', 'no_antrian', $this->no_antrian])
            ->andFilterWhere(['like', 'kd_dokter', $this->kd_dokter])
            ->andFilterWhere(['like', 'status', $this->status]);

        return $dataProvider;
    }
}
