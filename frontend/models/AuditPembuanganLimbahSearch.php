<?php

namespace frontend\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use frontend\models\AuditPembuanganLimbah;

/**
 * AuditPembuanganLimbahSearch represents the model behind the search form of `frontend\models\AuditPembuanganLimbah`.
 */
class AuditPembuanganLimbahSearch extends AuditPembuanganLimbah
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['tanggal', 'id_ruang', 'pemisahan_limbah_oleh_penghasil_limbah', 'limbah_infeksius_dimasukkan_kantong_kuning', 'limbah_noninfeksius_dimasukkan_kantong_hitam', 'limbah_tigaperempat_diikat', 'limbah_segera_dibawa_kepembuangan_sementara', 'kotak_sampah_dalam_kondisi_bersih', 'pembersihan_tempat_sampah_dengan_desinfekten', 'pembersihan_penampungan_sementara_dengan_desinfekten'], 'safe'],
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
        $query = AuditPembuanganLimbah::find();

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

        $query->andFilterWhere(['like', 'id_ruang', $this->id_ruang])
            ->andFilterWhere(['like', 'pemisahan_limbah_oleh_penghasil_limbah', $this->pemisahan_limbah_oleh_penghasil_limbah])
            ->andFilterWhere(['like', 'limbah_infeksius_dimasukkan_kantong_kuning', $this->limbah_infeksius_dimasukkan_kantong_kuning])
            ->andFilterWhere(['like', 'limbah_noninfeksius_dimasukkan_kantong_hitam', $this->limbah_noninfeksius_dimasukkan_kantong_hitam])
            ->andFilterWhere(['like', 'limbah_tigaperempat_diikat', $this->limbah_tigaperempat_diikat])
            ->andFilterWhere(['like', 'limbah_segera_dibawa_kepembuangan_sementara', $this->limbah_segera_dibawa_kepembuangan_sementara])
            ->andFilterWhere(['like', 'kotak_sampah_dalam_kondisi_bersih', $this->kotak_sampah_dalam_kondisi_bersih])
            ->andFilterWhere(['like', 'pembersihan_tempat_sampah_dengan_desinfekten', $this->pembersihan_tempat_sampah_dengan_desinfekten])
            ->andFilterWhere(['like', 'pembersihan_penampungan_sementara_dengan_desinfekten', $this->pembersihan_penampungan_sementara_dengan_desinfekten]);

        return $dataProvider;
    }
}
