<?php

namespace frontend\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use frontend\models\PerpustakaanAnggota;

/**
 * PerpustakaanAnggotaSearch represents the model behind the search form of `frontend\models\PerpustakaanAnggota`.
 */
class PerpustakaanAnggotaSearch extends PerpustakaanAnggota
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['no_anggota', 'nama_anggota', 'tmp_lahir', 'tgl_lahir', 'j_kel', 'alamat', 'no_telp', 'email', 'tgl_gabung', 'masa_berlaku', 'jenis_anggota', 'nomer_id'], 'safe'],
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
        $query = PerpustakaanAnggota::find();

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
            'tgl_gabung' => $this->tgl_gabung,
            'masa_berlaku' => $this->masa_berlaku,
        ]);

        $query->andFilterWhere(['like', 'no_anggota', $this->no_anggota])
            ->andFilterWhere(['like', 'nama_anggota', $this->nama_anggota])
            ->andFilterWhere(['like', 'tmp_lahir', $this->tmp_lahir])
            ->andFilterWhere(['like', 'j_kel', $this->j_kel])
            ->andFilterWhere(['like', 'alamat', $this->alamat])
            ->andFilterWhere(['like', 'no_telp', $this->no_telp])
            ->andFilterWhere(['like', 'email', $this->email])
            ->andFilterWhere(['like', 'jenis_anggota', $this->jenis_anggota])
            ->andFilterWhere(['like', 'nomer_id', $this->nomer_id]);

        return $dataProvider;
    }
}
