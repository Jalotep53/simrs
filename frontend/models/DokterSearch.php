<?php

namespace frontend\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use frontend\models\Dokter;

/**
 * DokterSearch represents the model behind the search form of `frontend\models\Dokter`.
 */
class DokterSearch extends Dokter
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['kd_dokter', 'nm_dokter', 'jk', 'tmp_lahir', 'tgl_lahir', 'gol_drh', 'agama', 'almt_tgl', 'no_telp', 'stts_nikah', 'kd_sps', 'alumni', 'no_ijn_praktek', 'status'], 'safe'],
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
        $query = Dokter::find();

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
            'tgl_lahir' => $this->tgl_lahir,
        ]);

        $query->andFilterWhere(['like', 'kd_dokter', $this->kd_dokter])
            ->andFilterWhere(['like', 'nm_dokter', $this->nm_dokter])
            ->andFilterWhere(['like', 'jk', $this->jk])
            ->andFilterWhere(['like', 'tmp_lahir', $this->tmp_lahir])
            ->andFilterWhere(['like', 'gol_drh', $this->gol_drh])
            ->andFilterWhere(['like', 'agama', $this->agama])
            ->andFilterWhere(['like', 'almt_tgl', $this->almt_tgl])
            ->andFilterWhere(['like', 'no_telp', $this->no_telp])
            ->andFilterWhere(['like', 'stts_nikah', $this->stts_nikah])
            ->andFilterWhere(['like', 'kd_sps', $this->kd_sps])
            ->andFilterWhere(['like', 'alumni', $this->alumni])
            ->andFilterWhere(['like', 'no_ijn_praktek', $this->no_ijn_praktek])
            ->andFilterWhere(['like', 'status', $this->status]);

        return $dataProvider;
    }
}
