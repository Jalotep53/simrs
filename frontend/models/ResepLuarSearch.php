<?php

namespace frontend\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use frontend\models\ResepLuar;

/**
 * ResepLuarSearch represents the model behind the search form of `frontend\models\ResepLuar`.
 */
class ResepLuarSearch extends ResepLuar
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['no_resep', 'tgl_perawatan', 'jam', 'no_rawat', 'kd_dokter', 'tgl_peresepan', 'jam_peresepan'], 'safe'],
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
        $query = ResepLuar::find();

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
            'tgl_perawatan' => $this->tgl_perawatan,
            'jam' => $this->jam,
            'tgl_peresepan' => $this->tgl_peresepan,
            'jam_peresepan' => $this->jam_peresepan,
        ]);

        $query->andFilterWhere(['like', 'no_resep', $this->no_resep])
            ->andFilterWhere(['like', 'no_rawat', $this->no_rawat])
            ->andFilterWhere(['like', 'kd_dokter', $this->kd_dokter]);

        return $dataProvider;
    }
}
