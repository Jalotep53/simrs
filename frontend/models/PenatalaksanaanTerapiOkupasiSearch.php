<?php

namespace frontend\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use frontend\models\PenatalaksanaanTerapiOkupasi;

/**
 * PenatalaksanaanTerapiOkupasiSearch represents the model behind the search form of `frontend\models\PenatalaksanaanTerapiOkupasi`.
 */
class PenatalaksanaanTerapiOkupasiSearch extends PenatalaksanaanTerapiOkupasi
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['no_rawat', 'tanggal', 'nip', 'keluhan_utama', 'rpd', 'rps', 'anamnesa_general', 'tanda_vital', 'pemeriksaan_penunjang', 'spesialisasi', 'keterangan_spesialisasi', 'pemeriksaan_okupasi_terapi', 'aset', 'limitasi', 'diagnosa_terapi_okupasi', 'rencana_intervensi'], 'safe'],
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
        $query = PenatalaksanaanTerapiOkupasi::find();

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
            ->andFilterWhere(['like', 'nip', $this->nip])
            ->andFilterWhere(['like', 'keluhan_utama', $this->keluhan_utama])
            ->andFilterWhere(['like', 'rpd', $this->rpd])
            ->andFilterWhere(['like', 'rps', $this->rps])
            ->andFilterWhere(['like', 'anamnesa_general', $this->anamnesa_general])
            ->andFilterWhere(['like', 'tanda_vital', $this->tanda_vital])
            ->andFilterWhere(['like', 'pemeriksaan_penunjang', $this->pemeriksaan_penunjang])
            ->andFilterWhere(['like', 'spesialisasi', $this->spesialisasi])
            ->andFilterWhere(['like', 'keterangan_spesialisasi', $this->keterangan_spesialisasi])
            ->andFilterWhere(['like', 'pemeriksaan_okupasi_terapi', $this->pemeriksaan_okupasi_terapi])
            ->andFilterWhere(['like', 'aset', $this->aset])
            ->andFilterWhere(['like', 'limitasi', $this->limitasi])
            ->andFilterWhere(['like', 'diagnosa_terapi_okupasi', $this->diagnosa_terapi_okupasi])
            ->andFilterWhere(['like', 'rencana_intervensi', $this->rencana_intervensi]);

        return $dataProvider;
    }
}
