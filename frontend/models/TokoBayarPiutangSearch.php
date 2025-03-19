<?php

namespace frontend\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use frontend\models\TokoBayarPiutang;

/**
 * TokoBayarPiutangSearch represents the model behind the search form of `frontend\models\TokoBayarPiutang`.
 */
class TokoBayarPiutangSearch extends TokoBayarPiutang
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['tgl_bayar', 'no_member', 'catatan', 'nota_piutang', 'kd_rek', 'kd_rek_kontra'], 'safe'],
            [['besar_cicilan'], 'number'],
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
        $query = TokoBayarPiutang::find();

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
        ]);

        $query->andFilterWhere(['like', 'no_member', $this->no_member])
            ->andFilterWhere(['like', 'catatan', $this->catatan])
            ->andFilterWhere(['like', 'nota_piutang', $this->nota_piutang])
            ->andFilterWhere(['like', 'kd_rek', $this->kd_rek])
            ->andFilterWhere(['like', 'kd_rek_kontra', $this->kd_rek_kontra]);

        return $dataProvider;
    }
}
