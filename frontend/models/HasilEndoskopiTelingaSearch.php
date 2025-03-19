<?php

namespace frontend\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use frontend\models\HasilEndoskopiTelinga;

/**
 * HasilEndoskopiTelingaSearch represents the model behind the search form of `frontend\models\HasilEndoskopiTelinga`.
 */
class HasilEndoskopiTelingaSearch extends HasilEndoskopiTelinga
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['no_rawat', 'tanggal', 'kd_dokter', 'diagnosa_klinis', 'kiriman_dari', 'bentuk_liang_telinga_kanan', 'bentuk_liang_telinga_kiri', 'kondisi_liang_telinga_kanan', 'keterangan_kondisi_liang_telinga_kanan', 'kondisi_liang_telinga_kiri', 'keterangan_kondisi_liang_telinga_kiri', 'membran_timpani_intak_kanan', 'membran_timpani_intak_kiri', 'membran_timpani_perforasi_kanan', 'keterangan_membran_timpani_perforasi_kanan', 'membran_timpani_perforasi_kiri', 'keterangan_membran_timpani_perforasi_kiri', 'kavum_timpani_mukosa_kanan', 'kavum_timpani_mukosa_kiri', 'kavum_timpani_osikel_kanan', 'kavum_timpani_osikel_kiri', 'kavum_timpani_isthmus_kanan', 'kavum_timpani_isthmus_kiri', 'kavum_timpani_anterior_kanan', 'kavum_timpani_anterior_kiri', 'kavum_timpani_posterior_kanan', 'kavum_timpani_posterior_kiri', 'lainlain_kanan', 'lainlain_kiri', 'kesimpulan', 'anjuran'], 'safe'],
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
        $query = HasilEndoskopiTelinga::find();

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
            ->andFilterWhere(['like', 'kd_dokter', $this->kd_dokter])
            ->andFilterWhere(['like', 'diagnosa_klinis', $this->diagnosa_klinis])
            ->andFilterWhere(['like', 'kiriman_dari', $this->kiriman_dari])
            ->andFilterWhere(['like', 'bentuk_liang_telinga_kanan', $this->bentuk_liang_telinga_kanan])
            ->andFilterWhere(['like', 'bentuk_liang_telinga_kiri', $this->bentuk_liang_telinga_kiri])
            ->andFilterWhere(['like', 'kondisi_liang_telinga_kanan', $this->kondisi_liang_telinga_kanan])
            ->andFilterWhere(['like', 'keterangan_kondisi_liang_telinga_kanan', $this->keterangan_kondisi_liang_telinga_kanan])
            ->andFilterWhere(['like', 'kondisi_liang_telinga_kiri', $this->kondisi_liang_telinga_kiri])
            ->andFilterWhere(['like', 'keterangan_kondisi_liang_telinga_kiri', $this->keterangan_kondisi_liang_telinga_kiri])
            ->andFilterWhere(['like', 'membran_timpani_intak_kanan', $this->membran_timpani_intak_kanan])
            ->andFilterWhere(['like', 'membran_timpani_intak_kiri', $this->membran_timpani_intak_kiri])
            ->andFilterWhere(['like', 'membran_timpani_perforasi_kanan', $this->membran_timpani_perforasi_kanan])
            ->andFilterWhere(['like', 'keterangan_membran_timpani_perforasi_kanan', $this->keterangan_membran_timpani_perforasi_kanan])
            ->andFilterWhere(['like', 'membran_timpani_perforasi_kiri', $this->membran_timpani_perforasi_kiri])
            ->andFilterWhere(['like', 'keterangan_membran_timpani_perforasi_kiri', $this->keterangan_membran_timpani_perforasi_kiri])
            ->andFilterWhere(['like', 'kavum_timpani_mukosa_kanan', $this->kavum_timpani_mukosa_kanan])
            ->andFilterWhere(['like', 'kavum_timpani_mukosa_kiri', $this->kavum_timpani_mukosa_kiri])
            ->andFilterWhere(['like', 'kavum_timpani_osikel_kanan', $this->kavum_timpani_osikel_kanan])
            ->andFilterWhere(['like', 'kavum_timpani_osikel_kiri', $this->kavum_timpani_osikel_kiri])
            ->andFilterWhere(['like', 'kavum_timpani_isthmus_kanan', $this->kavum_timpani_isthmus_kanan])
            ->andFilterWhere(['like', 'kavum_timpani_isthmus_kiri', $this->kavum_timpani_isthmus_kiri])
            ->andFilterWhere(['like', 'kavum_timpani_anterior_kanan', $this->kavum_timpani_anterior_kanan])
            ->andFilterWhere(['like', 'kavum_timpani_anterior_kiri', $this->kavum_timpani_anterior_kiri])
            ->andFilterWhere(['like', 'kavum_timpani_posterior_kanan', $this->kavum_timpani_posterior_kanan])
            ->andFilterWhere(['like', 'kavum_timpani_posterior_kiri', $this->kavum_timpani_posterior_kiri])
            ->andFilterWhere(['like', 'lainlain_kanan', $this->lainlain_kanan])
            ->andFilterWhere(['like', 'lainlain_kiri', $this->lainlain_kiri])
            ->andFilterWhere(['like', 'kesimpulan', $this->kesimpulan])
            ->andFilterWhere(['like', 'anjuran', $this->anjuran]);

        return $dataProvider;
    }
}
