<?php

namespace frontend\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use frontend\models\CatatanPersalinan;

/**
 * CatatanPersalinanSearch represents the model behind the search form of `frontend\models\CatatanPersalinan`.
 */
class CatatanPersalinanSearch extends CatatanPersalinan
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['no_rawat', 'mulai', 'selesai', 'kd_dokter', 'nip', 'catatan', 'waktu_persalinan_kala_1', 'waktu_persalinan_kala_2', 'waktu_persalinan_kala_3', 'waktu_persalinan_jumlah', 'perineum', 'jahitan_luar_1', 'jahitan_luar_2', 'jahitan_dalam_1', 'jahitan_dalam_2', 'anak', 'status_lahir', 'apgar_score', 'bb', 'pb', 'kelainan', 'ketuban', 'placenta', 'ukuran', 'tali_pusat', 'insertio', 'darah_keluar_kala_1', 'darah_keluar_kala_2', 'darah_keluar_kala_3', 'darah_keluar_kala_4', 'darah_keluar_jumlah', 'kondisi_umum', 'td', 'nadi', 'rr', 'suhu', 'kontraksi_uterus', 'ppv', 'pengobatan'], 'safe'],
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
        $query = CatatanPersalinan::find();

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
            'mulai' => $this->mulai,
            'selesai' => $this->selesai,
        ]);

        $query->andFilterWhere(['like', 'no_rawat', $this->no_rawat])
            ->andFilterWhere(['like', 'kd_dokter', $this->kd_dokter])
            ->andFilterWhere(['like', 'nip', $this->nip])
            ->andFilterWhere(['like', 'catatan', $this->catatan])
            ->andFilterWhere(['like', 'waktu_persalinan_kala_1', $this->waktu_persalinan_kala_1])
            ->andFilterWhere(['like', 'waktu_persalinan_kala_2', $this->waktu_persalinan_kala_2])
            ->andFilterWhere(['like', 'waktu_persalinan_kala_3', $this->waktu_persalinan_kala_3])
            ->andFilterWhere(['like', 'waktu_persalinan_jumlah', $this->waktu_persalinan_jumlah])
            ->andFilterWhere(['like', 'perineum', $this->perineum])
            ->andFilterWhere(['like', 'jahitan_luar_1', $this->jahitan_luar_1])
            ->andFilterWhere(['like', 'jahitan_luar_2', $this->jahitan_luar_2])
            ->andFilterWhere(['like', 'jahitan_dalam_1', $this->jahitan_dalam_1])
            ->andFilterWhere(['like', 'jahitan_dalam_2', $this->jahitan_dalam_2])
            ->andFilterWhere(['like', 'anak', $this->anak])
            ->andFilterWhere(['like', 'status_lahir', $this->status_lahir])
            ->andFilterWhere(['like', 'apgar_score', $this->apgar_score])
            ->andFilterWhere(['like', 'bb', $this->bb])
            ->andFilterWhere(['like', 'pb', $this->pb])
            ->andFilterWhere(['like', 'kelainan', $this->kelainan])
            ->andFilterWhere(['like', 'ketuban', $this->ketuban])
            ->andFilterWhere(['like', 'placenta', $this->placenta])
            ->andFilterWhere(['like', 'ukuran', $this->ukuran])
            ->andFilterWhere(['like', 'tali_pusat', $this->tali_pusat])
            ->andFilterWhere(['like', 'insertio', $this->insertio])
            ->andFilterWhere(['like', 'darah_keluar_kala_1', $this->darah_keluar_kala_1])
            ->andFilterWhere(['like', 'darah_keluar_kala_2', $this->darah_keluar_kala_2])
            ->andFilterWhere(['like', 'darah_keluar_kala_3', $this->darah_keluar_kala_3])
            ->andFilterWhere(['like', 'darah_keluar_kala_4', $this->darah_keluar_kala_4])
            ->andFilterWhere(['like', 'darah_keluar_jumlah', $this->darah_keluar_jumlah])
            ->andFilterWhere(['like', 'kondisi_umum', $this->kondisi_umum])
            ->andFilterWhere(['like', 'td', $this->td])
            ->andFilterWhere(['like', 'nadi', $this->nadi])
            ->andFilterWhere(['like', 'rr', $this->rr])
            ->andFilterWhere(['like', 'suhu', $this->suhu])
            ->andFilterWhere(['like', 'kontraksi_uterus', $this->kontraksi_uterus])
            ->andFilterWhere(['like', 'ppv', $this->ppv])
            ->andFilterWhere(['like', 'pengobatan', $this->pengobatan]);

        return $dataProvider;
    }
}
