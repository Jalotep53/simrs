<?php

namespace frontend\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use frontend\models\RiwayatSeminar;

/**
 * RiwayatSeminarSearch represents the model behind the search form of `frontend\models\RiwayatSeminar`.
 */
class RiwayatSeminarSearch extends RiwayatSeminar
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id'], 'integer'],
            [['tingkat', 'jenis', 'nama_seminar', 'peranan', 'mulai', 'selesai', 'penyelengara', 'tempat', 'berkas'], 'safe'],
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
        $query = RiwayatSeminar::find();

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
            'id' => $this->id,
            'mulai' => $this->mulai,
            'selesai' => $this->selesai,
        ]);

        $query->andFilterWhere(['like', 'tingkat', $this->tingkat])
            ->andFilterWhere(['like', 'jenis', $this->jenis])
            ->andFilterWhere(['like', 'nama_seminar', $this->nama_seminar])
            ->andFilterWhere(['like', 'peranan', $this->peranan])
            ->andFilterWhere(['like', 'penyelengara', $this->penyelengara])
            ->andFilterWhere(['like', 'tempat', $this->tempat])
            ->andFilterWhere(['like', 'berkas', $this->berkas]);

        return $dataProvider;
    }
}
