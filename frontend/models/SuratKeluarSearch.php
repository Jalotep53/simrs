<?php

namespace frontend\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use frontend\models\SuratKeluar;

/**
 * SuratKeluarSearch represents the model behind the search form of `frontend\models\SuratKeluar`.
 */
class SuratKeluarSearch extends SuratKeluar
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['no_urut', 'no_surat', 'tujuan', 'tgl_surat', 'perihal', 'tgl_kirim', 'kd_lemari', 'kd_rak', 'kd_map', 'kd_ruang', 'kd_sifat', 'lampiran', 'tembusan', 'tgl_deadline_balas', 'kd_balas', 'keterangan', 'kd_status', 'kd_klasifikasi', 'file_url'], 'safe'],
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
        $query = SuratKeluar::find();

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
            'tgl_surat' => $this->tgl_surat,
            'tgl_kirim' => $this->tgl_kirim,
            'tgl_deadline_balas' => $this->tgl_deadline_balas,
        ]);

        $query->andFilterWhere(['like', 'no_urut', $this->no_urut])
            ->andFilterWhere(['like', 'no_surat', $this->no_surat])
            ->andFilterWhere(['like', 'tujuan', $this->tujuan])
            ->andFilterWhere(['like', 'perihal', $this->perihal])
            ->andFilterWhere(['like', 'kd_lemari', $this->kd_lemari])
            ->andFilterWhere(['like', 'kd_rak', $this->kd_rak])
            ->andFilterWhere(['like', 'kd_map', $this->kd_map])
            ->andFilterWhere(['like', 'kd_ruang', $this->kd_ruang])
            ->andFilterWhere(['like', 'kd_sifat', $this->kd_sifat])
            ->andFilterWhere(['like', 'lampiran', $this->lampiran])
            ->andFilterWhere(['like', 'tembusan', $this->tembusan])
            ->andFilterWhere(['like', 'kd_balas', $this->kd_balas])
            ->andFilterWhere(['like', 'keterangan', $this->keterangan])
            ->andFilterWhere(['like', 'kd_status', $this->kd_status])
            ->andFilterWhere(['like', 'kd_klasifikasi', $this->kd_klasifikasi])
            ->andFilterWhere(['like', 'file_url', $this->file_url]);

        return $dataProvider;
    }
}
