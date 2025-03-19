<?php

namespace frontend\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use frontend\models\TagihanMandiri;

/**
 * TagihanMandiriSearch represents the model behind the search form of `frontend\models\TagihanMandiri`.
 */
class TagihanMandiriSearch extends TagihanMandiri
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['no_rkm_medis', 'nm_pasien', 'alamat', 'jk', 'tgl_lahir', 'umurdaftar', 'tgl_registrasi', 'no_nota', 'no_rawat', 'no_id', 'status_lanjut', 'tgl_closing', 'status_bayar', 'pembatalan', 'dibatalkan_oleh', 'kasir', 'tambahan1', 'tambahan2', 'tambahan3', 'diupdatebank', 'referensi'], 'safe'],
            [['besar_bayar', 'besar_batal'], 'number'],
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
        $query = TagihanMandiri::find();

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
            'tgl_lahir' => $this->tgl_lahir,
            'tgl_registrasi' => $this->tgl_registrasi,
            'besar_bayar' => $this->besar_bayar,
            'tgl_closing' => $this->tgl_closing,
            'besar_batal' => $this->besar_batal,
            'diupdatebank' => $this->diupdatebank,
        ]);

        $query->andFilterWhere(['like', 'no_rkm_medis', $this->no_rkm_medis])
            ->andFilterWhere(['like', 'nm_pasien', $this->nm_pasien])
            ->andFilterWhere(['like', 'alamat', $this->alamat])
            ->andFilterWhere(['like', 'jk', $this->jk])
            ->andFilterWhere(['like', 'umurdaftar', $this->umurdaftar])
            ->andFilterWhere(['like', 'no_nota', $this->no_nota])
            ->andFilterWhere(['like', 'no_rawat', $this->no_rawat])
            ->andFilterWhere(['like', 'no_id', $this->no_id])
            ->andFilterWhere(['like', 'status_lanjut', $this->status_lanjut])
            ->andFilterWhere(['like', 'status_bayar', $this->status_bayar])
            ->andFilterWhere(['like', 'pembatalan', $this->pembatalan])
            ->andFilterWhere(['like', 'dibatalkan_oleh', $this->dibatalkan_oleh])
            ->andFilterWhere(['like', 'kasir', $this->kasir])
            ->andFilterWhere(['like', 'tambahan1', $this->tambahan1])
            ->andFilterWhere(['like', 'tambahan2', $this->tambahan2])
            ->andFilterWhere(['like', 'tambahan3', $this->tambahan3])
            ->andFilterWhere(['like', 'referensi', $this->referensi]);

        return $dataProvider;
    }
}
