<?php

namespace frontend\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use frontend\models\SuratPenolakanAnjuranMedis;

/**
 * SuratPenolakanAnjuranMedisSearch represents the model behind the search form of `frontend\models\SuratPenolakanAnjuranMedis`.
 */
class SuratPenolakanAnjuranMedisSearch extends SuratPenolakanAnjuranMedis
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['no_surat', 'no_rawat', 'tanggal', 'hubungan', 'nama_pj', 'umur_pj', 'no_ktppj', 'jkpj', 'no_telp', 'kode_penolakan', 'alasan_penolakan', 'informasi_risiko_penolakan', 'nik'], 'safe'],
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
        $query = SuratPenolakanAnjuranMedis::find();

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
        ]);

        $query->andFilterWhere(['like', 'no_surat', $this->no_surat])
            ->andFilterWhere(['like', 'no_rawat', $this->no_rawat])
            ->andFilterWhere(['like', 'hubungan', $this->hubungan])
            ->andFilterWhere(['like', 'nama_pj', $this->nama_pj])
            ->andFilterWhere(['like', 'umur_pj', $this->umur_pj])
            ->andFilterWhere(['like', 'no_ktppj', $this->no_ktppj])
            ->andFilterWhere(['like', 'jkpj', $this->jkpj])
            ->andFilterWhere(['like', 'no_telp', $this->no_telp])
            ->andFilterWhere(['like', 'kode_penolakan', $this->kode_penolakan])
            ->andFilterWhere(['like', 'alasan_penolakan', $this->alasan_penolakan])
            ->andFilterWhere(['like', 'informasi_risiko_penolakan', $this->informasi_risiko_penolakan])
            ->andFilterWhere(['like', 'nik', $this->nik]);

        return $dataProvider;
    }
}
