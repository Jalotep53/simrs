<?php

namespace frontend\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use frontend\models\AuditBundlePlabsi;

/**
 * AuditBundlePlabsiSearch represents the model behind the search form of `frontend\models\AuditBundlePlabsi`.
 */
class AuditBundlePlabsiSearch extends AuditBundlePlabsi
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['tanggal', 'id_ruang', 'sebelum_melakukan_hand_hygiene', 'menggunakan_apd_lengkap', 'lokasi_pemasangan_sesuai', 'alat_yang_digunakan_steril', 'pembersihan_kulit', 'setelah_melakukan_hand_hygiene', 'perawatan_dressing_infus', 'spoit_yang_digunakan_disposible', 'memberi_tanggal_dan_jam_pemasangan_infus', 'set_infus_setiap_72jam'], 'safe'],
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
        $query = AuditBundlePlabsi::find();

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
            ->andFilterWhere(['like', 'sebelum_melakukan_hand_hygiene', $this->sebelum_melakukan_hand_hygiene])
            ->andFilterWhere(['like', 'menggunakan_apd_lengkap', $this->menggunakan_apd_lengkap])
            ->andFilterWhere(['like', 'lokasi_pemasangan_sesuai', $this->lokasi_pemasangan_sesuai])
            ->andFilterWhere(['like', 'alat_yang_digunakan_steril', $this->alat_yang_digunakan_steril])
            ->andFilterWhere(['like', 'pembersihan_kulit', $this->pembersihan_kulit])
            ->andFilterWhere(['like', 'setelah_melakukan_hand_hygiene', $this->setelah_melakukan_hand_hygiene])
            ->andFilterWhere(['like', 'perawatan_dressing_infus', $this->perawatan_dressing_infus])
            ->andFilterWhere(['like', 'spoit_yang_digunakan_disposible', $this->spoit_yang_digunakan_disposible])
            ->andFilterWhere(['like', 'memberi_tanggal_dan_jam_pemasangan_infus', $this->memberi_tanggal_dan_jam_pemasangan_infus])
            ->andFilterWhere(['like', 'set_infus_setiap_72jam', $this->set_infus_setiap_72jam]);

        return $dataProvider;
    }
}
