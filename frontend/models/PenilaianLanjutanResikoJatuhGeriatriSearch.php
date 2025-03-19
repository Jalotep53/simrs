<?php

namespace frontend\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use frontend\models\PenilaianLanjutanResikoJatuhGeriatri;

/**
 * PenilaianLanjutanResikoJatuhGeriatriSearch represents the model behind the search form of `frontend\models\PenilaianLanjutanResikoJatuhGeriatri`.
 */
class PenilaianLanjutanResikoJatuhGeriatriSearch extends PenilaianLanjutanResikoJatuhGeriatri
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['no_rawat', 'tanggal', 'penilaian_jatuh_skala1', 'penilaian_jatuh_skala2', 'penilaian_jatuh_skala3', 'penilaian_jatuh_skala4', 'penilaian_jatuh_skala5', 'penilaian_jatuh_skala6', 'penilaian_jatuh_skala7', 'penilaian_jatuh_skala8', 'penilaian_jatuh_skala9', 'penilaian_jatuh_skala10', 'penilaian_jatuh_skala11', 'hasil_skrining', 'saran', 'nip'], 'safe'],
            [['penilaian_jatuh_nilai1', 'penilaian_jatuh_nilai2', 'penilaian_jatuh_nilai3', 'penilaian_jatuh_nilai4', 'penilaian_jatuh_nilai5', 'penilaian_jatuh_nilai6', 'penilaian_jatuh_nilai7', 'penilaian_jatuh_nilai8', 'penilaian_jatuh_nilai9', 'penilaian_jatuh_nilai10', 'penilaian_jatuh_nilai11', 'penilaian_jatuh_totalnilai'], 'integer'],
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
        $query = PenilaianLanjutanResikoJatuhGeriatri::find();

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
            'penilaian_jatuh_nilai1' => $this->penilaian_jatuh_nilai1,
            'penilaian_jatuh_nilai2' => $this->penilaian_jatuh_nilai2,
            'penilaian_jatuh_nilai3' => $this->penilaian_jatuh_nilai3,
            'penilaian_jatuh_nilai4' => $this->penilaian_jatuh_nilai4,
            'penilaian_jatuh_nilai5' => $this->penilaian_jatuh_nilai5,
            'penilaian_jatuh_nilai6' => $this->penilaian_jatuh_nilai6,
            'penilaian_jatuh_nilai7' => $this->penilaian_jatuh_nilai7,
            'penilaian_jatuh_nilai8' => $this->penilaian_jatuh_nilai8,
            'penilaian_jatuh_nilai9' => $this->penilaian_jatuh_nilai9,
            'penilaian_jatuh_nilai10' => $this->penilaian_jatuh_nilai10,
            'penilaian_jatuh_nilai11' => $this->penilaian_jatuh_nilai11,
            'penilaian_jatuh_totalnilai' => $this->penilaian_jatuh_totalnilai,
        ]);

        $query->andFilterWhere(['like', 'no_rawat', $this->no_rawat])
            ->andFilterWhere(['like', 'penilaian_jatuh_skala1', $this->penilaian_jatuh_skala1])
            ->andFilterWhere(['like', 'penilaian_jatuh_skala2', $this->penilaian_jatuh_skala2])
            ->andFilterWhere(['like', 'penilaian_jatuh_skala3', $this->penilaian_jatuh_skala3])
            ->andFilterWhere(['like', 'penilaian_jatuh_skala4', $this->penilaian_jatuh_skala4])
            ->andFilterWhere(['like', 'penilaian_jatuh_skala5', $this->penilaian_jatuh_skala5])
            ->andFilterWhere(['like', 'penilaian_jatuh_skala6', $this->penilaian_jatuh_skala6])
            ->andFilterWhere(['like', 'penilaian_jatuh_skala7', $this->penilaian_jatuh_skala7])
            ->andFilterWhere(['like', 'penilaian_jatuh_skala8', $this->penilaian_jatuh_skala8])
            ->andFilterWhere(['like', 'penilaian_jatuh_skala9', $this->penilaian_jatuh_skala9])
            ->andFilterWhere(['like', 'penilaian_jatuh_skala10', $this->penilaian_jatuh_skala10])
            ->andFilterWhere(['like', 'penilaian_jatuh_skala11', $this->penilaian_jatuh_skala11])
            ->andFilterWhere(['like', 'hasil_skrining', $this->hasil_skrining])
            ->andFilterWhere(['like', 'saran', $this->saran])
            ->andFilterWhere(['like', 'nip', $this->nip]);

        return $dataProvider;
    }
}
