<?php

namespace frontend\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use frontend\models\SkorBromagePascaAnestesi;

/**
 * SkorBromagePascaAnestesiSearch represents the model behind the search form of `frontend\models\SkorBromagePascaAnestesi`.
 */
class SkorBromagePascaAnestesiSearch extends SkorBromagePascaAnestesi
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['no_rawat', 'tanggal', 'penilaian_skala1', 'keluar', 'instruksi', 'kd_dokter', 'nip'], 'safe'],
            [['penilaian_nilai1'], 'integer'],
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
        $query = SkorBromagePascaAnestesi::find();

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
        ]);

        $query->andFilterWhere(['like', 'no_rawat', $this->no_rawat])
            ->andFilterWhere(['like', 'penilaian_skala1', $this->penilaian_skala1])
            ->andFilterWhere(['like', 'keluar', $this->keluar])
            ->andFilterWhere(['like', 'instruksi', $this->instruksi])
            ->andFilterWhere(['like', 'kd_dokter', $this->kd_dokter])
            ->andFilterWhere(['like', 'nip', $this->nip]);

        return $dataProvider;
    }
}
