<?php

namespace frontend\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use frontend\models\Parkir;

/**
 * ParkirSearch represents the model behind the search form of `frontend\models\Parkir`.
 */
class ParkirSearch extends Parkir
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nip', 'nomer_kartu', 'kd_parkir', 'no_kendaraan', 'tgl_masuk', 'jam_masuk', 'tgl_keluar', 'jam_keluar'], 'safe'],
            [['lama_parkir'], 'integer'],
            [['ttl_biaya'], 'number'],
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
        $query = Parkir::find();

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
            'tgl_masuk' => $this->tgl_masuk,
            'jam_masuk' => $this->jam_masuk,
            'tgl_keluar' => $this->tgl_keluar,
            'jam_keluar' => $this->jam_keluar,
            'lama_parkir' => $this->lama_parkir,
            'ttl_biaya' => $this->ttl_biaya,
        ]);

        $query->andFilterWhere(['like', 'nip', $this->nip])
            ->andFilterWhere(['like', 'nomer_kartu', $this->nomer_kartu])
            ->andFilterWhere(['like', 'kd_parkir', $this->kd_parkir])
            ->andFilterWhere(['like', 'no_kendaraan', $this->no_kendaraan]);

        return $dataProvider;
    }
}
