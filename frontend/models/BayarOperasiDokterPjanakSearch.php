<?php

namespace frontend\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use frontend\models\BayarOperasiDokterPjanak;

/**
 * BayarOperasiDokterPjanakSearch represents the model behind the search form of `frontend\models\BayarOperasiDokterPjanak`.
 */
class BayarOperasiDokterPjanakSearch extends BayarOperasiDokterPjanak
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['no_bayar', 'no_rawat', 'kode_paket', 'tgl_operasi'], 'safe'],
            [['biaya_dokter_pjanak'], 'number'],
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
        $query = BayarOperasiDokterPjanak::find();

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
            'biaya_dokter_pjanak' => $this->biaya_dokter_pjanak,
        ]);

        $query->andFilterWhere(['like', 'no_bayar', $this->no_bayar])
            ->andFilterWhere(['like', 'no_rawat', $this->no_rawat])
            ->andFilterWhere(['like', 'kode_paket', $this->kode_paket]);

        return $dataProvider;
    }
}
