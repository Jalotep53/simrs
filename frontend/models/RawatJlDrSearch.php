<?php

namespace frontend\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use frontend\models\RawatJlDr;

/**
 * RawatJlDrSearch represents the model behind the search form of `frontend\models\RawatJlDr`.
 */
class RawatJlDrSearch extends RawatJlDr
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['no_rawat', 'kd_jenis_prw', 'kd_dokter', 'tgl_perawatan', 'jam_rawat', 'stts_bayar'], 'safe'],
            [['material', 'bhp', 'tarif_tindakandr', 'kso', 'menejemen', 'biaya_rawat'], 'number'],
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
        $query = RawatJlDr::find();

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
            'jam_rawat' => $this->jam_rawat,
            'material' => $this->material,
            'bhp' => $this->bhp,
            'tarif_tindakandr' => $this->tarif_tindakandr,
            'kso' => $this->kso,
            'menejemen' => $this->menejemen,
            'biaya_rawat' => $this->biaya_rawat,
        ]);

        $query->andFilterWhere(['like', 'no_rawat', $this->no_rawat])
            ->andFilterWhere(['like', 'kd_jenis_prw', $this->kd_jenis_prw])
            ->andFilterWhere(['like', 'kd_dokter', $this->kd_dokter])
            ->andFilterWhere(['like', 'stts_bayar', $this->stts_bayar]);

        return $dataProvider;
    }
}
