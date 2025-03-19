<?php

namespace frontend\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use frontend\models\SuratPersetujuanRawatInap;

/**
 * SuratPersetujuanRawatInapSearch represents the model behind the search form of `frontend\models\SuratPersetujuanRawatInap`.
 */
class SuratPersetujuanRawatInapSearch extends SuratPersetujuanRawatInap
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['no_surat', 'no_rawat', 'tanggal', 'nama_pj', 'no_ktppj', 'pendidikan_pj', 'alamatpj', 'no_telppj', 'ruang', 'kelas', 'hubungan', 'hak_kelas', 'nama_alamat_keluarga_terdekat', 'bayar_secara', 'nip'], 'safe'],
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
        $query = SuratPersetujuanRawatInap::find();

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
            ->andFilterWhere(['like', 'nama_pj', $this->nama_pj])
            ->andFilterWhere(['like', 'no_ktppj', $this->no_ktppj])
            ->andFilterWhere(['like', 'pendidikan_pj', $this->pendidikan_pj])
            ->andFilterWhere(['like', 'alamatpj', $this->alamatpj])
            ->andFilterWhere(['like', 'no_telppj', $this->no_telppj])
            ->andFilterWhere(['like', 'ruang', $this->ruang])
            ->andFilterWhere(['like', 'kelas', $this->kelas])
            ->andFilterWhere(['like', 'hubungan', $this->hubungan])
            ->andFilterWhere(['like', 'hak_kelas', $this->hak_kelas])
            ->andFilterWhere(['like', 'nama_alamat_keluarga_terdekat', $this->nama_alamat_keluarga_terdekat])
            ->andFilterWhere(['like', 'bayar_secara', $this->bayar_secara])
            ->andFilterWhere(['like', 'nip', $this->nip]);

        return $dataProvider;
    }
}
