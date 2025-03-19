<?php

namespace frontend;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use frontend\models\BayarJmDokter;

/**
 * modelsBayarJmDokterSearch represents the model behind the search form of `frontend\models\BayarJmDokter`.
 */
class modelsBayarJmDokterSearch extends BayarJmDokter
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['no_bayar', 'tanggal', 'kd_dokter', 'nama_bayar', 'keterangan'], 'safe'],
            [['besar_bayar', 'rawatjalan', 'rawatinap', 'labrawatjalan', 'labrawatinap', 'radrawatjalan', 'radrawatinap', 'operasiralan', 'operasiranap'], 'number'],
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
        $query = BayarJmDokter::find();

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
            'tanggal' => $this->tanggal,
            'besar_bayar' => $this->besar_bayar,
            'rawatjalan' => $this->rawatjalan,
            'rawatinap' => $this->rawatinap,
            'labrawatjalan' => $this->labrawatjalan,
            'labrawatinap' => $this->labrawatinap,
            'radrawatjalan' => $this->radrawatjalan,
            'radrawatinap' => $this->radrawatinap,
            'operasiralan' => $this->operasiralan,
            'operasiranap' => $this->operasiranap,
        ]);

        $query->andFilterWhere(['like', 'no_bayar', $this->no_bayar])
            ->andFilterWhere(['like', 'kd_dokter', $this->kd_dokter])
            ->andFilterWhere(['like', 'nama_bayar', $this->nama_bayar])
            ->andFilterWhere(['like', 'keterangan', $this->keterangan]);

        return $dataProvider;
    }
}
