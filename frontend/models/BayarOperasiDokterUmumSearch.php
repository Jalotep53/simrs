<?php

namespace frontend\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use frontend\models\BayarOperasiDokterUmum;

/**
 * BayarOperasiDokterUmumSearch represents the model behind the search form of `frontend\models\BayarOperasiDokterUmum`.
 */
class BayarOperasiDokterUmumSearch extends BayarOperasiDokterUmum
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['no_bayar', 'no_rawat', 'kode_paket', 'tgl_operasi'], 'safe'],
            [['biaya_dokter_umum'], 'number'],
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
        $query = BayarOperasiDokterUmum::find();

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
            'tgl_operasi' => $this->tgl_operasi,
            'biaya_dokter_umum' => $this->biaya_dokter_umum,
        ]);

        $query->andFilterWhere(['like', 'no_bayar', $this->no_bayar])
            ->andFilterWhere(['like', 'no_rawat', $this->no_rawat])
            ->andFilterWhere(['like', 'kode_paket', $this->kode_paket]);

        return $dataProvider;
    }
}
