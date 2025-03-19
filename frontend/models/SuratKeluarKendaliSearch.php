<?php

namespace frontend\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use frontend\models\SuratKeluarKendali;

/**
 * SuratKeluarKendaliSearch represents the model behind the search form of `frontend\models\SuratKeluarKendali`.
 */
class SuratKeluarKendaliSearch extends SuratKeluarKendali
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['no_kendali', 'kd_indeks', 'no_urut', 'tgl_selesai', 'tgl_kembali', 'kepada'], 'safe'],
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
        $query = SuratKeluarKendali::find();

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
            'tgl_selesai' => $this->tgl_selesai,
            'tgl_kembali' => $this->tgl_kembali,
        ]);

        $query->andFilterWhere(['like', 'no_kendali', $this->no_kendali])
            ->andFilterWhere(['like', 'kd_indeks', $this->kd_indeks])
            ->andFilterWhere(['like', 'no_urut', $this->no_urut])
            ->andFilterWhere(['like', 'kepada', $this->kepada]);

        return $dataProvider;
    }
}
