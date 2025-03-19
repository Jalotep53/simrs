<?php

namespace frontend\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use frontend\models\RekapPresensi;

/**
 * RekapPresensiSearch represents the model behind the search form of `frontend\models\RekapPresensi`.
 */
class RekapPresensiSearch extends RekapPresensi
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id'], 'integer'],
            [['shift', 'jam_datang', 'jam_pulang', 'status', 'keterlambatan', 'durasi', 'keterangan', 'photo'], 'safe'],
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
        $query = RekapPresensi::find();

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
            'jam_datang' => $this->jam_datang,
            'jam_pulang' => $this->jam_pulang,
        ]);

        $query->andFilterWhere(['like', 'shift', $this->shift])
            ->andFilterWhere(['like', 'status', $this->status])
            ->andFilterWhere(['like', 'keterlambatan', $this->keterlambatan])
            ->andFilterWhere(['like', 'durasi', $this->durasi])
            ->andFilterWhere(['like', 'keterangan', $this->keterangan])
            ->andFilterWhere(['like', 'photo', $this->photo]);

        return $dataProvider;
    }
}
