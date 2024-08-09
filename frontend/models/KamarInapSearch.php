<?php

namespace frontend\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use frontend\models\KamarInap;

/**
 * KamarInapSearch represents the model behind the search form of `frontend\models\KamarInap`.
 */
class KamarInapSearch extends KamarInap
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['no_rawat', 'kd_kamar', 'diagnosa_awal', 'diagnosa_akhir', 'tgl_masuk', 'jam_masuk', 'tgl_keluar', 'jam_keluar', 'stts_pulang'], 'safe'],
            [['trf_kamar', 'lama', 'ttl_biaya'], 'number'],
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
        $query = KamarInap::find();

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
            'trf_kamar' => $this->trf_kamar,
            'jam_masuk' => $this->jam_masuk,
            'jam_keluar' => $this->jam_keluar,
            'lama' => $this->lama,
            'ttl_biaya' => $this->ttl_biaya,
        ]);

        $query->andFilterWhere(['like', 'no_rawat', $this->no_rawat])
            ->andFilterWhere(['like', 'kd_kamar', $this->kd_kamar])
            ->andFilterWhere(['like', 'diagnosa_awal', $this->diagnosa_awal])
            ->andFilterWhere(['like', 'diagnosa_akhir', $this->diagnosa_akhir])
            ->andFilterWhere(['like', 'tgl_masuk', $this->tgl_masuk])
            ->andFilterWhere(['like', 'tgl_keluar', $this->tgl_keluar])
            ->andFilterWhere(['like', 'stts_pulang', $this->stts_pulang]);

        return $dataProvider;
    }
}
