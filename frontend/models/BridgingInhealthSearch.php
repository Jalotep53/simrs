<?php

namespace frontend\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use frontend\models\BridgingInhealth;

/**
 * BridgingInhealthSearch represents the model behind the search form of `frontend\models\BridgingInhealth`.
 */
class BridgingInhealthSearch extends BridgingInhealth
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['no_sjp', 'no_rawat', 'tglsep', 'tglrujukan', 'no_rujukan', 'kdppkrujukan', 'nmppkrujukan', 'kdppkpelayanan', 'nmppkpelayanan', 'jnspelayanan', 'catatan', 'diagawal', 'nmdiagnosaawal', 'diagawal2', 'nmdiagnosaawal2', 'kdpolitujuan', 'nmpolitujuan', 'klsrawat', 'klsdesc', 'kdbu', 'nmbu', 'lakalantas', 'lokasilaka', 'user', 'nomr', 'nama_pasien', 'tanggal_lahir', 'jkel', 'no_kartu', 'tglpulang', 'plan', 'plandesc', 'idakomodasi', 'tipesjp', 'tipecob'], 'safe'],
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
        $query = BridgingInhealth::find();

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
            'tglsep' => $this->tglsep,
            'tglrujukan' => $this->tglrujukan,
            'tanggal_lahir' => $this->tanggal_lahir,
            'tglpulang' => $this->tglpulang,
        ]);

        $query->andFilterWhere(['like', 'no_sjp', $this->no_sjp])
            ->andFilterWhere(['like', 'no_rawat', $this->no_rawat])
            ->andFilterWhere(['like', 'no_rujukan', $this->no_rujukan])
            ->andFilterWhere(['like', 'kdppkrujukan', $this->kdppkrujukan])
            ->andFilterWhere(['like', 'nmppkrujukan', $this->nmppkrujukan])
            ->andFilterWhere(['like', 'kdppkpelayanan', $this->kdppkpelayanan])
            ->andFilterWhere(['like', 'nmppkpelayanan', $this->nmppkpelayanan])
            ->andFilterWhere(['like', 'jnspelayanan', $this->jnspelayanan])
            ->andFilterWhere(['like', 'catatan', $this->catatan])
            ->andFilterWhere(['like', 'diagawal', $this->diagawal])
            ->andFilterWhere(['like', 'nmdiagnosaawal', $this->nmdiagnosaawal])
            ->andFilterWhere(['like', 'diagawal2', $this->diagawal2])
            ->andFilterWhere(['like', 'nmdiagnosaawal2', $this->nmdiagnosaawal2])
            ->andFilterWhere(['like', 'kdpolitujuan', $this->kdpolitujuan])
            ->andFilterWhere(['like', 'nmpolitujuan', $this->nmpolitujuan])
            ->andFilterWhere(['like', 'klsrawat', $this->klsrawat])
            ->andFilterWhere(['like', 'klsdesc', $this->klsdesc])
            ->andFilterWhere(['like', 'kdbu', $this->kdbu])
            ->andFilterWhere(['like', 'nmbu', $this->nmbu])
            ->andFilterWhere(['like', 'lakalantas', $this->lakalantas])
            ->andFilterWhere(['like', 'lokasilaka', $this->lokasilaka])
            ->andFilterWhere(['like', 'user', $this->user])
            ->andFilterWhere(['like', 'nomr', $this->nomr])
            ->andFilterWhere(['like', 'nama_pasien', $this->nama_pasien])
            ->andFilterWhere(['like', 'jkel', $this->jkel])
            ->andFilterWhere(['like', 'no_kartu', $this->no_kartu])
            ->andFilterWhere(['like', 'plan', $this->plan])
            ->andFilterWhere(['like', 'plandesc', $this->plandesc])
            ->andFilterWhere(['like', 'idakomodasi', $this->idakomodasi])
            ->andFilterWhere(['like', 'tipesjp', $this->tipesjp])
            ->andFilterWhere(['like', 'tipecob', $this->tipecob]);

        return $dataProvider;
    }
}
