<?php

namespace frontend\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use frontend\models\RegPeriksa;

/**
 * RegPeriksaSearch represents the model behind the search form of `frontend\models\RegPeriksa`.
 */
class RegPeriksaSearch extends RegPeriksa
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['no_reg', 'no_rawat', 'tgl_registrasi', 'jam_reg', 'kd_dokter', 'no_rkm_medis', 'kd_poli', 'p_jawab', 'almt_pj', 'hubunganpj', 'stts', 'stts_daftar', 'status_lanjut', 'kd_pj', 'sttsumur', 'status_bayar', 'status_poli'], 'safe'],
            [['biaya_reg'], 'number'],
            [['umurdaftar'], 'integer'],
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
        $query = RegPeriksa::find();

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
            'tgl_registrasi' => $this->tgl_registrasi,
            'jam_reg' => $this->jam_reg,
            'biaya_reg' => $this->biaya_reg,
            'umurdaftar' => $this->umurdaftar,
        ]);

        $query->andFilterWhere(['like', 'no_reg', $this->no_reg])
            ->andFilterWhere(['like', 'no_rawat', $this->no_rawat])
            ->andFilterWhere(['like', 'kd_dokter', $this->kd_dokter])
            ->andFilterWhere(['like', 'no_rkm_medis', $this->no_rkm_medis])
            ->andFilterWhere(['like', 'kd_poli', $this->kd_poli])
            ->andFilterWhere(['like', 'p_jawab', $this->p_jawab])
            ->andFilterWhere(['like', 'almt_pj', $this->almt_pj])
            ->andFilterWhere(['like', 'hubunganpj', $this->hubunganpj])
            ->andFilterWhere(['like', 'stts', $this->stts])
            ->andFilterWhere(['like', 'stts_daftar', $this->stts_daftar])
            ->andFilterWhere(['like', 'status_lanjut', $this->status_lanjut])
            ->andFilterWhere(['like', 'kd_pj', $this->kd_pj])
            ->andFilterWhere(['like', 'sttsumur', $this->sttsumur])
            ->andFilterWhere(['like', 'status_bayar', $this->status_bayar])
            ->andFilterWhere(['like', 'status_poli', $this->status_poli]);

        return $dataProvider;
    }
}
