<?php

namespace frontend\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use frontend\models\EdukasiPasienKeluargaRj;

/**
 * EdukasiPasienKeluargaRjSearch represents the model behind the search form of `frontend\models\EdukasiPasienKeluargaRj`.
 */
class EdukasiPasienKeluargaRjSearch extends EdukasiPasienKeluargaRj
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['no_rawat', 'tanggal', 'nip', 'bicara', 'keterangan_bicara', 'bahasa_sehari', 'perlu_penerjemah', 'keterangan_penerjemah', 'bahasa_isyarat', 'cara_belajar', 'hambatan_belajar', 'keterangan_hambatan_belajar', 'kemampuan_belajar', 'keterangan_kemampuan_belajar', 'penyakitnya_merupakan', 'keterangan_penyakitnya_merupakan', 'keputusan_memilih_layanan', 'keterangan_keputusan_memilih_layanan', 'keyakinan_terhadap_terapi', 'keterangan_keyakinan_terhadap_terapi', 'aspek_keyakinan_dipertimbangkan', 'keterangan_aspek_keyakinan_dipertimbangkan', 'kesediaan_menerima_informasi', 'topik_edukasi_penyakit', 'topik_edukasi_rencana_tindakan', 'topik_edukasi_pengobatan', 'topik_edukasi_hasil_layanan'], 'safe'],
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
        $query = EdukasiPasienKeluargaRj::find();

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

        $query->andFilterWhere(['like', 'no_rawat', $this->no_rawat])
            ->andFilterWhere(['like', 'nip', $this->nip])
            ->andFilterWhere(['like', 'bicara', $this->bicara])
            ->andFilterWhere(['like', 'keterangan_bicara', $this->keterangan_bicara])
            ->andFilterWhere(['like', 'bahasa_sehari', $this->bahasa_sehari])
            ->andFilterWhere(['like', 'perlu_penerjemah', $this->perlu_penerjemah])
            ->andFilterWhere(['like', 'keterangan_penerjemah', $this->keterangan_penerjemah])
            ->andFilterWhere(['like', 'bahasa_isyarat', $this->bahasa_isyarat])
            ->andFilterWhere(['like', 'cara_belajar', $this->cara_belajar])
            ->andFilterWhere(['like', 'hambatan_belajar', $this->hambatan_belajar])
            ->andFilterWhere(['like', 'keterangan_hambatan_belajar', $this->keterangan_hambatan_belajar])
            ->andFilterWhere(['like', 'kemampuan_belajar', $this->kemampuan_belajar])
            ->andFilterWhere(['like', 'keterangan_kemampuan_belajar', $this->keterangan_kemampuan_belajar])
            ->andFilterWhere(['like', 'penyakitnya_merupakan', $this->penyakitnya_merupakan])
            ->andFilterWhere(['like', 'keterangan_penyakitnya_merupakan', $this->keterangan_penyakitnya_merupakan])
            ->andFilterWhere(['like', 'keputusan_memilih_layanan', $this->keputusan_memilih_layanan])
            ->andFilterWhere(['like', 'keterangan_keputusan_memilih_layanan', $this->keterangan_keputusan_memilih_layanan])
            ->andFilterWhere(['like', 'keyakinan_terhadap_terapi', $this->keyakinan_terhadap_terapi])
            ->andFilterWhere(['like', 'keterangan_keyakinan_terhadap_terapi', $this->keterangan_keyakinan_terhadap_terapi])
            ->andFilterWhere(['like', 'aspek_keyakinan_dipertimbangkan', $this->aspek_keyakinan_dipertimbangkan])
            ->andFilterWhere(['like', 'keterangan_aspek_keyakinan_dipertimbangkan', $this->keterangan_aspek_keyakinan_dipertimbangkan])
            ->andFilterWhere(['like', 'kesediaan_menerima_informasi', $this->kesediaan_menerima_informasi])
            ->andFilterWhere(['like', 'topik_edukasi_penyakit', $this->topik_edukasi_penyakit])
            ->andFilterWhere(['like', 'topik_edukasi_rencana_tindakan', $this->topik_edukasi_rencana_tindakan])
            ->andFilterWhere(['like', 'topik_edukasi_pengobatan', $this->topik_edukasi_pengobatan])
            ->andFilterWhere(['like', 'topik_edukasi_hasil_layanan', $this->topik_edukasi_hasil_layanan]);

        return $dataProvider;
    }
}
