<?php

namespace frontend\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use frontend\models\RiwayatJabatan;

/**
 * RiwayatJabatanSearch represents the model behind the search form of `frontend\models\RiwayatJabatan`.
 */
class RiwayatJabatanSearch extends RiwayatJabatan
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'masa_kerja', 'bln_kerja'], 'integer'],
            [['jabatan', 'tmt_pangkat', 'tmt_pangkat_yad', 'pejabat_penetap', 'nomor_sk', 'tgl_sk', 'dasar_peraturan', 'berkas'], 'safe'],
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
        $query = RiwayatJabatan::find();

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
            'id' => $this->id,
            'tmt_pangkat' => $this->tmt_pangkat,
            'tmt_pangkat_yad' => $this->tmt_pangkat_yad,
            'tgl_sk' => $this->tgl_sk,
            'masa_kerja' => $this->masa_kerja,
            'bln_kerja' => $this->bln_kerja,
        ]);

        $query->andFilterWhere(['like', 'jabatan', $this->jabatan])
            ->andFilterWhere(['like', 'pejabat_penetap', $this->pejabat_penetap])
            ->andFilterWhere(['like', 'nomor_sk', $this->nomor_sk])
            ->andFilterWhere(['like', 'dasar_peraturan', $this->dasar_peraturan])
            ->andFilterWhere(['like', 'berkas', $this->berkas]);

        return $dataProvider;
    }
}
