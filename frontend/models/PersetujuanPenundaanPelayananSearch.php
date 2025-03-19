<?php

namespace frontend\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use frontend\models\PersetujuanPenundaanPelayanan;

/**
 * PersetujuanPenundaanPelayananSearch represents the model behind the search form of `frontend\models\PersetujuanPenundaanPelayanan`.
 */
class PersetujuanPenundaanPelayananSearch extends PersetujuanPenundaanPelayanan
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['no_surat', 'no_rawat', 'tanggal', 'nama_pj', 'umur_pj', 'no_ktppj', 'alamatpj', 'no_telppj', 'hubungan', 'ruang', 'dokter_pengirim', 'pelayanan_dilakukan', 'ditunda_karena', 'keterangan_ditunda', 'alternatif_diberikan', 'keterangan_alternatif_diberikan', 'nip', 'kd_dokter'], 'safe'],
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
        $query = PersetujuanPenundaanPelayanan::find();

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
            ->andFilterWhere(['like', 'umur_pj', $this->umur_pj])
            ->andFilterWhere(['like', 'no_ktppj', $this->no_ktppj])
            ->andFilterWhere(['like', 'alamatpj', $this->alamatpj])
            ->andFilterWhere(['like', 'no_telppj', $this->no_telppj])
            ->andFilterWhere(['like', 'hubungan', $this->hubungan])
            ->andFilterWhere(['like', 'ruang', $this->ruang])
            ->andFilterWhere(['like', 'dokter_pengirim', $this->dokter_pengirim])
            ->andFilterWhere(['like', 'pelayanan_dilakukan', $this->pelayanan_dilakukan])
            ->andFilterWhere(['like', 'ditunda_karena', $this->ditunda_karena])
            ->andFilterWhere(['like', 'keterangan_ditunda', $this->keterangan_ditunda])
            ->andFilterWhere(['like', 'alternatif_diberikan', $this->alternatif_diberikan])
            ->andFilterWhere(['like', 'keterangan_alternatif_diberikan', $this->keterangan_alternatif_diberikan])
            ->andFilterWhere(['like', 'nip', $this->nip])
            ->andFilterWhere(['like', 'kd_dokter', $this->kd_dokter]);

        return $dataProvider;
    }
}
