<?php

namespace frontend\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use frontend\models\BayarPiutang;

/**
 * BayarPiutangSearch represents the model behind the search form of `frontend\models\BayarPiutang`.
 */
class BayarPiutangSearch extends BayarPiutang
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['tgl_bayar', 'no_rkm_medis', 'catatan', 'no_rawat', 'kd_rek', 'kd_rek_kontra', 'kd_rek_diskon_piutang', 'kd_rek_tidak_terbayar'], 'safe'],
            [['besar_cicilan', 'diskon_piutang', 'tidak_terbayar'], 'number'],
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
        $query = BayarPiutang::find();

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
            'tgl_bayar' => $this->tgl_bayar,
            'besar_cicilan' => $this->besar_cicilan,
            'diskon_piutang' => $this->diskon_piutang,
            'tidak_terbayar' => $this->tidak_terbayar,
        ]);

        $query->andFilterWhere(['like', 'no_rkm_medis', $this->no_rkm_medis])
            ->andFilterWhere(['like', 'catatan', $this->catatan])
            ->andFilterWhere(['like', 'no_rawat', $this->no_rawat])
            ->andFilterWhere(['like', 'kd_rek', $this->kd_rek])
            ->andFilterWhere(['like', 'kd_rek_kontra', $this->kd_rek_kontra])
            ->andFilterWhere(['like', 'kd_rek_diskon_piutang', $this->kd_rek_diskon_piutang])
            ->andFilterWhere(['like', 'kd_rek_tidak_terbayar', $this->kd_rek_tidak_terbayar]);

        return $dataProvider;
    }
}
