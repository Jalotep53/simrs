<?php

namespace frontend\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use frontend\models\BridgingSep;

/**
 * BridgingSepSearch represents the model behind the search form of `frontend\models\BridgingSep`.
 */
class BridgingSepSearch extends BridgingSep
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['no_sep', 'no_rawat', 'tglsep', 'tglrujukan', 'no_rujukan', 'kdppkrujukan', 'nmppkrujukan', 'kdppkpelayanan', 'nmppkpelayanan', 'jnspelayanan', 'catatan', 'diagawal', 'nmdiagnosaawal', 'kdpolitujuan', 'nmpolitujuan', 'klsrawat', 'klsnaik', 'pembiayaan', 'pjnaikkelas', 'lakalantas', 'user', 'nomr', 'nama_pasien', 'tanggal_lahir', 'peserta', 'jkel', 'no_kartu', 'tglpulang', 'asal_rujukan', 'eksekutif', 'cob', 'notelep', 'katarak', 'tglkkl', 'keterangankkl', 'suplesi', 'no_sep_suplesi', 'kdprop', 'nmprop', 'kdkab', 'nmkab', 'kdkec', 'nmkec', 'noskdp', 'kddpjp', 'nmdpdjp', 'tujuankunjungan', 'flagprosedur', 'penunjang', 'asesmenpelayanan', 'kddpjplayanan', 'nmdpjplayanan'], 'safe'],
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
        $query = BridgingSep::find();

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
            'tglkkl' => $this->tglkkl,
        ]);

        $query->andFilterWhere(['like', 'no_sep', $this->no_sep])
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
            ->andFilterWhere(['like', 'kdpolitujuan', $this->kdpolitujuan])
            ->andFilterWhere(['like', 'nmpolitujuan', $this->nmpolitujuan])
            ->andFilterWhere(['like', 'klsrawat', $this->klsrawat])
            ->andFilterWhere(['like', 'klsnaik', $this->klsnaik])
            ->andFilterWhere(['like', 'pembiayaan', $this->pembiayaan])
            ->andFilterWhere(['like', 'pjnaikkelas', $this->pjnaikkelas])
            ->andFilterWhere(['like', 'lakalantas', $this->lakalantas])
            ->andFilterWhere(['like', 'user', $this->user])
            ->andFilterWhere(['like', 'nomr', $this->nomr])
            ->andFilterWhere(['like', 'nama_pasien', $this->nama_pasien])
            ->andFilterWhere(['like', 'peserta', $this->peserta])
            ->andFilterWhere(['like', 'jkel', $this->jkel])
            ->andFilterWhere(['like', 'no_kartu', $this->no_kartu])
            ->andFilterWhere(['like', 'asal_rujukan', $this->asal_rujukan])
            ->andFilterWhere(['like', 'eksekutif', $this->eksekutif])
            ->andFilterWhere(['like', 'cob', $this->cob])
            ->andFilterWhere(['like', 'notelep', $this->notelep])
            ->andFilterWhere(['like', 'katarak', $this->katarak])
            ->andFilterWhere(['like', 'keterangankkl', $this->keterangankkl])
            ->andFilterWhere(['like', 'suplesi', $this->suplesi])
            ->andFilterWhere(['like', 'no_sep_suplesi', $this->no_sep_suplesi])
            ->andFilterWhere(['like', 'kdprop', $this->kdprop])
            ->andFilterWhere(['like', 'nmprop', $this->nmprop])
            ->andFilterWhere(['like', 'kdkab', $this->kdkab])
            ->andFilterWhere(['like', 'nmkab', $this->nmkab])
            ->andFilterWhere(['like', 'kdkec', $this->kdkec])
            ->andFilterWhere(['like', 'nmkec', $this->nmkec])
            ->andFilterWhere(['like', 'noskdp', $this->noskdp])
            ->andFilterWhere(['like', 'kddpjp', $this->kddpjp])
            ->andFilterWhere(['like', 'nmdpdjp', $this->nmdpdjp])
            ->andFilterWhere(['like', 'tujuankunjungan', $this->tujuankunjungan])
            ->andFilterWhere(['like', 'flagprosedur', $this->flagprosedur])
            ->andFilterWhere(['like', 'penunjang', $this->penunjang])
            ->andFilterWhere(['like', 'asesmenpelayanan', $this->asesmenpelayanan])
            ->andFilterWhere(['like', 'kddpjplayanan', $this->kddpjplayanan])
            ->andFilterWhere(['like', 'nmdpjplayanan', $this->nmdpjplayanan]);

        return $dataProvider;
    }
}
