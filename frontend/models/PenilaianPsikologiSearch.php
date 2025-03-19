<?php

namespace frontend\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use frontend\models\PenilaianPsikologi;

/**
 * PenilaianPsikologiSearch represents the model behind the search form of `frontend\models\PenilaianPsikologi`.
 */
class PenilaianPsikologiSearch extends PenilaianPsikologi
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['no_rawat', 'tanggal', 'nip', 'anamnesis', 'dikirim_dari', 'tujuan_pemeriksaan', 'ket_anamnesis', 'rupa', 'bentuk_tubuh', 'tindakan', 'pakaian', 'ekspresi', 'berbicara', 'penggunaan_kata', 'ciri_menyolok', 'hasil_psikotes', 'kepribadian', 'psikodinamika', 'kesimpulan_psikolog'], 'safe'],
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
        $query = PenilaianPsikologi::find();

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
            ->andFilterWhere(['like', 'anamnesis', $this->anamnesis])
            ->andFilterWhere(['like', 'dikirim_dari', $this->dikirim_dari])
            ->andFilterWhere(['like', 'tujuan_pemeriksaan', $this->tujuan_pemeriksaan])
            ->andFilterWhere(['like', 'ket_anamnesis', $this->ket_anamnesis])
            ->andFilterWhere(['like', 'rupa', $this->rupa])
            ->andFilterWhere(['like', 'bentuk_tubuh', $this->bentuk_tubuh])
            ->andFilterWhere(['like', 'tindakan', $this->tindakan])
            ->andFilterWhere(['like', 'pakaian', $this->pakaian])
            ->andFilterWhere(['like', 'ekspresi', $this->ekspresi])
            ->andFilterWhere(['like', 'berbicara', $this->berbicara])
            ->andFilterWhere(['like', 'penggunaan_kata', $this->penggunaan_kata])
            ->andFilterWhere(['like', 'ciri_menyolok', $this->ciri_menyolok])
            ->andFilterWhere(['like', 'hasil_psikotes', $this->hasil_psikotes])
            ->andFilterWhere(['like', 'kepribadian', $this->kepribadian])
            ->andFilterWhere(['like', 'psikodinamika', $this->psikodinamika])
            ->andFilterWhere(['like', 'kesimpulan_psikolog', $this->kesimpulan_psikolog]);

        return $dataProvider;
    }
}
