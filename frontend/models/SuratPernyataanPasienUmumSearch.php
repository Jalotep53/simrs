<?php

namespace frontend\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use frontend\models\SuratPernyataanPasienUmum;

/**
 * SuratPernyataanPasienUmumSearch represents the model behind the search form of `frontend\models\SuratPernyataanPasienUmum`.
 */
class SuratPernyataanPasienUmumSearch extends SuratPernyataanPasienUmum
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['no_surat', 'no_rawat', 'tanggal', 'nama_pj', 'no_ktppj', 'tempat_lahirpj', 'lahirpj', 'jkpj', 'alamatpj', 'hubungan', 'no_telp', 'nip'], 'safe'],
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
        $query = SuratPernyataanPasienUmum::find();

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
            'lahirpj' => $this->lahirpj,
        ]);

        $query->andFilterWhere(['like', 'no_surat', $this->no_surat])
            ->andFilterWhere(['like', 'no_rawat', $this->no_rawat])
            ->andFilterWhere(['like', 'nama_pj', $this->nama_pj])
            ->andFilterWhere(['like', 'no_ktppj', $this->no_ktppj])
            ->andFilterWhere(['like', 'tempat_lahirpj', $this->tempat_lahirpj])
            ->andFilterWhere(['like', 'jkpj', $this->jkpj])
            ->andFilterWhere(['like', 'alamatpj', $this->alamatpj])
            ->andFilterWhere(['like', 'hubungan', $this->hubungan])
            ->andFilterWhere(['like', 'no_telp', $this->no_telp])
            ->andFilterWhere(['like', 'nip', $this->nip]);

        return $dataProvider;
    }
}
