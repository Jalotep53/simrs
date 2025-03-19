<?php

namespace frontend\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use frontend\models\BridgingSrbBpjs;

/**
 * BridgingSrbBpjsSearch represents the model behind the search form of `frontend\models\BridgingSrbBpjs`.
 */
class BridgingSrbBpjsSearch extends BridgingSrbBpjs
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['no_sep', 'no_srb', 'tgl_srb', 'alamat', 'email', 'kodeprogram', 'namaprogram', 'kodedpjp', 'nmdpjp', 'user', 'keterangan', 'saran'], 'safe'],
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
        $query = BridgingSrbBpjs::find();

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
            'tgl_srb' => $this->tgl_srb,
        ]);

        $query->andFilterWhere(['like', 'no_sep', $this->no_sep])
            ->andFilterWhere(['like', 'no_srb', $this->no_srb])
            ->andFilterWhere(['like', 'alamat', $this->alamat])
            ->andFilterWhere(['like', 'email', $this->email])
            ->andFilterWhere(['like', 'kodeprogram', $this->kodeprogram])
            ->andFilterWhere(['like', 'namaprogram', $this->namaprogram])
            ->andFilterWhere(['like', 'kodedpjp', $this->kodedpjp])
            ->andFilterWhere(['like', 'nmdpjp', $this->nmdpjp])
            ->andFilterWhere(['like', 'user', $this->user])
            ->andFilterWhere(['like', 'keterangan', $this->keterangan])
            ->andFilterWhere(['like', 'saran', $this->saran]);

        return $dataProvider;
    }
}
