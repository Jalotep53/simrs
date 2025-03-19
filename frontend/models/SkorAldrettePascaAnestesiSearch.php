<?php

namespace frontend\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use frontend\models\SkorAldrettePascaAnestesi;

/**
 * SkorAldrettePascaAnestesiSearch represents the model behind the search form of `frontend\models\SkorAldrettePascaAnestesi`.
 */
class SkorAldrettePascaAnestesiSearch extends SkorAldrettePascaAnestesi
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['no_rawat', 'tanggal', 'penilaian_skala1', 'penilaian_skala2', 'penilaian_skala3', 'penilaian_skala4', 'penilaian_skala5', 'keluar', 'instruksi', 'kd_dokter', 'nip'], 'safe'],
            [['penilaian_nilai1', 'penilaian_nilai2', 'penilaian_nilai3', 'penilaian_nilai4', 'penilaian_nilai5', 'penilaian_totalnilai'], 'integer'],
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
        $query = SkorAldrettePascaAnestesi::find();

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
            'penilaian_nilai1' => $this->penilaian_nilai1,
            'penilaian_nilai2' => $this->penilaian_nilai2,
            'penilaian_nilai3' => $this->penilaian_nilai3,
            'penilaian_nilai4' => $this->penilaian_nilai4,
            'penilaian_nilai5' => $this->penilaian_nilai5,
            'penilaian_totalnilai' => $this->penilaian_totalnilai,
        ]);

        $query->andFilterWhere(['like', 'no_rawat', $this->no_rawat])
            ->andFilterWhere(['like', 'penilaian_skala1', $this->penilaian_skala1])
            ->andFilterWhere(['like', 'penilaian_skala2', $this->penilaian_skala2])
            ->andFilterWhere(['like', 'penilaian_skala3', $this->penilaian_skala3])
            ->andFilterWhere(['like', 'penilaian_skala4', $this->penilaian_skala4])
            ->andFilterWhere(['like', 'penilaian_skala5', $this->penilaian_skala5])
            ->andFilterWhere(['like', 'keluar', $this->keluar])
            ->andFilterWhere(['like', 'instruksi', $this->instruksi])
            ->andFilterWhere(['like', 'kd_dokter', $this->kd_dokter])
            ->andFilterWhere(['like', 'nip', $this->nip]);

        return $dataProvider;
    }
}
