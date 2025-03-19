<?php

namespace frontend\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use frontend\models\BridgingResepApotekBpjs;

/**
 * BridgingResepApotekBpjsSearch represents the model behind the search form of `frontend\models\BridgingResepApotekBpjs`.
 */
class BridgingResepApotekBpjsSearch extends BridgingResepApotekBpjs
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['no_sep', 'no_sep_apotek', 'tgl_sep', 'kdpoli', 'nmpoli', 'kdjenis', 'nota_piutang', 'id_user_sep', 'tgl_resep', 'tgl_pelayanan', 'kodedpjp', 'nmdpjp', 'iterasi', 'no_kartu', 'nama_pasien', 'kdppkrujukan', 'nmppkpelayanan', 'status'], 'safe'],
            [['byTagRsp', 'byVerRsp'], 'number'],
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
        $query = BridgingResepApotekBpjs::find();

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
            'tgl_sep' => $this->tgl_sep,
            'tgl_resep' => $this->tgl_resep,
            'tgl_pelayanan' => $this->tgl_pelayanan,
            'byTagRsp' => $this->byTagRsp,
            'byVerRsp' => $this->byVerRsp,
        ]);

        $query->andFilterWhere(['like', 'no_sep', $this->no_sep])
            ->andFilterWhere(['like', 'no_sep_apotek', $this->no_sep_apotek])
            ->andFilterWhere(['like', 'kdpoli', $this->kdpoli])
            ->andFilterWhere(['like', 'nmpoli', $this->nmpoli])
            ->andFilterWhere(['like', 'kdjenis', $this->kdjenis])
            ->andFilterWhere(['like', 'nota_piutang', $this->nota_piutang])
            ->andFilterWhere(['like', 'id_user_sep', $this->id_user_sep])
            ->andFilterWhere(['like', 'kodedpjp', $this->kodedpjp])
            ->andFilterWhere(['like', 'nmdpjp', $this->nmdpjp])
            ->andFilterWhere(['like', 'iterasi', $this->iterasi])
            ->andFilterWhere(['like', 'no_kartu', $this->no_kartu])
            ->andFilterWhere(['like', 'nama_pasien', $this->nama_pasien])
            ->andFilterWhere(['like', 'kdppkrujukan', $this->kdppkrujukan])
            ->andFilterWhere(['like', 'nmppkpelayanan', $this->nmppkpelayanan])
            ->andFilterWhere(['like', 'status', $this->status]);

        return $dataProvider;
    }
}
