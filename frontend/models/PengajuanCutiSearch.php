<?php

namespace frontend\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use frontend\models\PengajuanCuti;

/**
 * PengajuanCutiSearch represents the model behind the search form of `frontend\models\PengajuanCuti`.
 */
class PengajuanCutiSearch extends PengajuanCuti
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['no_pengajuan', 'tanggal', 'tanggal_awal', 'tanggal_akhir', 'nik', 'urgensi', 'alamat', 'kepentingan', 'nik_pj', 'status'], 'safe'],
            [['jumlah'], 'integer'],
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
        $query = PengajuanCuti::find();

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
            'tanggal_awal' => $this->tanggal_awal,
            'tanggal_akhir' => $this->tanggal_akhir,
            'jumlah' => $this->jumlah,
        ]);

        $query->andFilterWhere(['like', 'no_pengajuan', $this->no_pengajuan])
            ->andFilterWhere(['like', 'nik', $this->nik])
            ->andFilterWhere(['like', 'urgensi', $this->urgensi])
            ->andFilterWhere(['like', 'alamat', $this->alamat])
            ->andFilterWhere(['like', 'kepentingan', $this->kepentingan])
            ->andFilterWhere(['like', 'nik_pj', $this->nik_pj])
            ->andFilterWhere(['like', 'status', $this->status]);

        return $dataProvider;
    }
}
