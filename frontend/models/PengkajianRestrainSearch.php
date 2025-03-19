<?php

namespace frontend\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use frontend\models\PengkajianRestrain;

/**
 * PengkajianRestrainSearch represents the model behind the search form of `frontend\models\PengkajianRestrain`.
 */
class PengkajianRestrainSearch extends PengkajianRestrain
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['no_rawat', 'tanggal', 'nip', 'gcs', 'refleka_cahaya_ka', 'refleka_cahaya_ki', 'ukuran_pupil_ka', 'ukuran_pupil_ki', 'td', 'suhu', 'rr', 'nadi', 'hasil_observasi', 'pertimbangan_klinis', 'restrain_non_farmakologi', 'restrain_non_farmakologi_keterangan', 'restrain_farmakologi', 'sudah_dijelaskan_keluarga', 'keluarga_yang_menyetujui'], 'safe'],
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
        $query = PengkajianRestrain::find();

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
            ->andFilterWhere(['like', 'gcs', $this->gcs])
            ->andFilterWhere(['like', 'refleka_cahaya_ka', $this->refleka_cahaya_ka])
            ->andFilterWhere(['like', 'refleka_cahaya_ki', $this->refleka_cahaya_ki])
            ->andFilterWhere(['like', 'ukuran_pupil_ka', $this->ukuran_pupil_ka])
            ->andFilterWhere(['like', 'ukuran_pupil_ki', $this->ukuran_pupil_ki])
            ->andFilterWhere(['like', 'td', $this->td])
            ->andFilterWhere(['like', 'suhu', $this->suhu])
            ->andFilterWhere(['like', 'rr', $this->rr])
            ->andFilterWhere(['like', 'nadi', $this->nadi])
            ->andFilterWhere(['like', 'hasil_observasi', $this->hasil_observasi])
            ->andFilterWhere(['like', 'pertimbangan_klinis', $this->pertimbangan_klinis])
            ->andFilterWhere(['like', 'restrain_non_farmakologi', $this->restrain_non_farmakologi])
            ->andFilterWhere(['like', 'restrain_non_farmakologi_keterangan', $this->restrain_non_farmakologi_keterangan])
            ->andFilterWhere(['like', 'restrain_farmakologi', $this->restrain_farmakologi])
            ->andFilterWhere(['like', 'sudah_dijelaskan_keluarga', $this->sudah_dijelaskan_keluarga])
            ->andFilterWhere(['like', 'keluarga_yang_menyetujui', $this->keluarga_yang_menyetujui]);

        return $dataProvider;
    }
}
