<?php

namespace frontend\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use frontend\models\BridgingRujukanBpjs;

/**
 * BridgingRujukanBpjsSearch represents the model behind the search form of `frontend\models\BridgingRujukanBpjs`.
 */
class BridgingRujukanBpjsSearch extends BridgingRujukanBpjs
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['no_sep', 'tglRujukan', 'tglRencanaKunjungan', 'ppkDirujuk', 'nm_ppkDirujuk', 'jnsPelayanan', 'catatan', 'diagRujukan', 'nama_diagRujukan', 'tipeRujukan', 'poliRujukan', 'nama_poliRujukan', 'no_rujukan', 'user'], 'safe'],
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
        $query = BridgingRujukanBpjs::find();

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
            'tglRujukan' => $this->tglRujukan,
            'tglRencanaKunjungan' => $this->tglRencanaKunjungan,
        ]);

        $query->andFilterWhere(['like', 'no_sep', $this->no_sep])
            ->andFilterWhere(['like', 'ppkDirujuk', $this->ppkDirujuk])
            ->andFilterWhere(['like', 'nm_ppkDirujuk', $this->nm_ppkDirujuk])
            ->andFilterWhere(['like', 'jnsPelayanan', $this->jnsPelayanan])
            ->andFilterWhere(['like', 'catatan', $this->catatan])
            ->andFilterWhere(['like', 'diagRujukan', $this->diagRujukan])
            ->andFilterWhere(['like', 'nama_diagRujukan', $this->nama_diagRujukan])
            ->andFilterWhere(['like', 'tipeRujukan', $this->tipeRujukan])
            ->andFilterWhere(['like', 'poliRujukan', $this->poliRujukan])
            ->andFilterWhere(['like', 'nama_poliRujukan', $this->nama_poliRujukan])
            ->andFilterWhere(['like', 'no_rujukan', $this->no_rujukan])
            ->andFilterWhere(['like', 'user', $this->user]);

        return $dataProvider;
    }
}
