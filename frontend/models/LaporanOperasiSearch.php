<?php

namespace frontend\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use frontend\models\LaporanOperasi;

/**
 * LaporanOperasiSearch represents the model behind the search form of `frontend\models\LaporanOperasi`.
 */
class LaporanOperasiSearch extends LaporanOperasi
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['no_rawat', 'tanggal', 'diagnosa_preop', 'diagnosa_postop', 'jaringan_dieksekusi', 'selesaioperasi', 'permintaan_pa', 'laporan_operasi'], 'safe'],
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
        $query = LaporanOperasi::find();

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
            'selesaioperasi' => $this->selesaioperasi,
        ]);

        $query->andFilterWhere(['like', 'no_rawat', $this->no_rawat])
            ->andFilterWhere(['like', 'diagnosa_preop', $this->diagnosa_preop])
            ->andFilterWhere(['like', 'diagnosa_postop', $this->diagnosa_postop])
            ->andFilterWhere(['like', 'jaringan_dieksekusi', $this->jaringan_dieksekusi])
            ->andFilterWhere(['like', 'permintaan_pa', $this->permintaan_pa])
            ->andFilterWhere(['like', 'laporan_operasi', $this->laporan_operasi]);

        return $dataProvider;
    }
}
