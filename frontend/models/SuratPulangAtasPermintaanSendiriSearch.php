<?php

namespace frontend\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use frontend\models\SuratPulangAtasPermintaanSendiri;

/**
 * SuratPulangAtasPermintaanSendiriSearch represents the model behind the search form of `frontend\models\SuratPulangAtasPermintaanSendiri`.
 */
class SuratPulangAtasPermintaanSendiriSearch extends SuratPulangAtasPermintaanSendiri
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['no_surat', 'no_rawat', 'tgl_pulang', 'rs_pilihan', 'nama_pj', 'lahir', 'umur', 'jkpj', 'alamat', 'hubungan', 'saksi_keluarga', 'nip'], 'safe'],
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
        $query = SuratPulangAtasPermintaanSendiri::find();

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
            'tgl_pulang' => $this->tgl_pulang,
            'lahir' => $this->lahir,
        ]);

        $query->andFilterWhere(['like', 'no_surat', $this->no_surat])
            ->andFilterWhere(['like', 'no_rawat', $this->no_rawat])
            ->andFilterWhere(['like', 'rs_pilihan', $this->rs_pilihan])
            ->andFilterWhere(['like', 'nama_pj', $this->nama_pj])
            ->andFilterWhere(['like', 'umur', $this->umur])
            ->andFilterWhere(['like', 'jkpj', $this->jkpj])
            ->andFilterWhere(['like', 'alamat', $this->alamat])
            ->andFilterWhere(['like', 'hubungan', $this->hubungan])
            ->andFilterWhere(['like', 'saksi_keluarga', $this->saksi_keluarga])
            ->andFilterWhere(['like', 'nip', $this->nip]);

        return $dataProvider;
    }
}
