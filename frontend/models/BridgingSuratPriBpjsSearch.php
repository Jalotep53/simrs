<?php

namespace frontend\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use frontend\models\BridgingSuratPriBpjs;

/**
 * BridgingSuratPriBpjsSearch represents the model behind the search form of `frontend\models\BridgingSuratPriBpjs`.
 */
class BridgingSuratPriBpjsSearch extends BridgingSuratPriBpjs
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['no_rawat', 'no_kartu', 'tgl_surat', 'no_surat', 'tgl_rencana', 'kd_dokter_bpjs', 'nm_dokter_bpjs', 'kd_poli_bpjs', 'nm_poli_bpjs', 'diagnosa', 'no_sep'], 'safe'],
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
        $query = BridgingSuratPriBpjs::find();

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
            'tgl_surat' => $this->tgl_surat,
            'tgl_rencana' => $this->tgl_rencana,
        ]);

        $query->andFilterWhere(['like', 'no_rawat', $this->no_rawat])
            ->andFilterWhere(['like', 'no_kartu', $this->no_kartu])
            ->andFilterWhere(['like', 'no_surat', $this->no_surat])
            ->andFilterWhere(['like', 'kd_dokter_bpjs', $this->kd_dokter_bpjs])
            ->andFilterWhere(['like', 'nm_dokter_bpjs', $this->nm_dokter_bpjs])
            ->andFilterWhere(['like', 'kd_poli_bpjs', $this->kd_poli_bpjs])
            ->andFilterWhere(['like', 'nm_poli_bpjs', $this->nm_poli_bpjs])
            ->andFilterWhere(['like', 'diagnosa', $this->diagnosa])
            ->andFilterWhere(['like', 'no_sep', $this->no_sep]);

        return $dataProvider;
    }
}
