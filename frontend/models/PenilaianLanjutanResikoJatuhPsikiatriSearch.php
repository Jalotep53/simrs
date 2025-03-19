<?php

namespace frontend\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use frontend\models\PenilaianLanjutanResikoJatuhPsikiatri;

/**
 * PenilaianLanjutanResikoJatuhPsikiatriSearch represents the model behind the search form of `frontend\models\PenilaianLanjutanResikoJatuhPsikiatri`.
 */
class PenilaianLanjutanResikoJatuhPsikiatriSearch extends PenilaianLanjutanResikoJatuhPsikiatri
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['no_rawat', 'tanggal', 'penilaian_jatuhedmonson_skala1', 'penilaian_jatuhedmonson_skala2', 'penilaian_jatuhedmonson_skala3', 'penilaian_jatuhedmonson_skala4', 'penilaian_jatuhedmonson_skala5', 'penilaian_jatuhedmonson_skala6', 'hasil_skrining', 'saran', 'nip'], 'safe'],
            [['penilaian_jatuhedmonson_nilai1', 'penilaian_jatuhedmonson_nilai2', 'penilaian_jatuhedmonson_nilai3', 'penilaian_jatuhedmonson_nilai4', 'penilaian_jatuhedmonson_nilai5', 'penilaian_jatuhedmonson_nilai6', 'penilaian_jatuhedmonson_totalnilai'], 'integer'],
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
        $query = PenilaianLanjutanResikoJatuhPsikiatri::find();

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
            'penilaian_jatuhedmonson_nilai1' => $this->penilaian_jatuhedmonson_nilai1,
            'penilaian_jatuhedmonson_nilai2' => $this->penilaian_jatuhedmonson_nilai2,
            'penilaian_jatuhedmonson_nilai3' => $this->penilaian_jatuhedmonson_nilai3,
            'penilaian_jatuhedmonson_nilai4' => $this->penilaian_jatuhedmonson_nilai4,
            'penilaian_jatuhedmonson_nilai5' => $this->penilaian_jatuhedmonson_nilai5,
            'penilaian_jatuhedmonson_nilai6' => $this->penilaian_jatuhedmonson_nilai6,
            'penilaian_jatuhedmonson_totalnilai' => $this->penilaian_jatuhedmonson_totalnilai,
        ]);

        $query->andFilterWhere(['like', 'no_rawat', $this->no_rawat])
            ->andFilterWhere(['like', 'penilaian_jatuhedmonson_skala1', $this->penilaian_jatuhedmonson_skala1])
            ->andFilterWhere(['like', 'penilaian_jatuhedmonson_skala2', $this->penilaian_jatuhedmonson_skala2])
            ->andFilterWhere(['like', 'penilaian_jatuhedmonson_skala3', $this->penilaian_jatuhedmonson_skala3])
            ->andFilterWhere(['like', 'penilaian_jatuhedmonson_skala4', $this->penilaian_jatuhedmonson_skala4])
            ->andFilterWhere(['like', 'penilaian_jatuhedmonson_skala5', $this->penilaian_jatuhedmonson_skala5])
            ->andFilterWhere(['like', 'penilaian_jatuhedmonson_skala6', $this->penilaian_jatuhedmonson_skala6])
            ->andFilterWhere(['like', 'hasil_skrining', $this->hasil_skrining])
            ->andFilterWhere(['like', 'saran', $this->saran])
            ->andFilterWhere(['like', 'nip', $this->nip]);

        return $dataProvider;
    }
}
