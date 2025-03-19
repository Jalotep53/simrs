<?php

namespace frontend\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use frontend\models\TagihanBriva;

/**
 * TagihanBrivaSearch represents the model behind the search form of `frontend\models\TagihanBriva`.
 */
class TagihanBrivaSearch extends TagihanBriva
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['no_rkm_medis', 'nm_pasien', 'alamat', 'jk', 'tgl_lahir', 'tgl_registrasi', 'no_tagihan', 'keterangan', 'status_tagihan', 'tgl_closing', 'status_bayar', 'kasir', 'diupdatebank', 'referensi'], 'safe'],
            [['besar_bayar'], 'number'],
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
        $query = TagihanBriva::find();

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
            'diupdatebank' => $this->diupdatebank,
        ]);

        $query->andFilterWhere(['like', 'no_rkm_medis', $this->no_rkm_medis])
            ->andFilterWhere(['like', 'nm_pasien', $this->nm_pasien])
            ->andFilterWhere(['like', 'alamat', $this->alamat])
            ->andFilterWhere(['like', 'jk', $this->jk])
            ->andFilterWhere(['like', 'no_tagihan', $this->no_tagihan])
            ->andFilterWhere(['like', 'keterangan', $this->keterangan])
            ->andFilterWhere(['like', 'status_tagihan', $this->status_tagihan])
            ->andFilterWhere(['like', 'status_bayar', $this->status_bayar])
            ->andFilterWhere(['like', 'kasir', $this->kasir])
            ->andFilterWhere(['like', 'referensi', $this->referensi]);

        return $dataProvider;
    }
}
