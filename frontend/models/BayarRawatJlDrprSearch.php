<?php

namespace frontend\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use frontend\models\BayarRawatJlDrpr;

/**
 * BayarRawatJlDrprSearch represents the model behind the search form of `frontend\models\BayarRawatJlDrpr`.
 */
class BayarRawatJlDrprSearch extends BayarRawatJlDrpr
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['no_bayar', 'no_rawat', 'kd_jenis_prw', 'tgl_perawatan', 'jam_rawat'], 'safe'],
            [['tarif_tindakandr'], 'number'],
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
        $query = BayarRawatJlDrpr::find();

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
            'tarif_tindakandr' => $this->tarif_tindakandr,
        ]);

        $query->andFilterWhere(['like', 'no_bayar', $this->no_bayar])
            ->andFilterWhere(['like', 'no_rawat', $this->no_rawat])
            ->andFilterWhere(['like', 'kd_jenis_prw', $this->kd_jenis_prw]);

        return $dataProvider;
    }
}
