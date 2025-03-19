<?php

namespace frontend\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use frontend\models\PenjabDokumenKerjasama;

/**
 * PenjabDokumenKerjasamaSearch represents the model behind the search form of `frontend\models\PenjabDokumenKerjasama`.
 */
class PenjabDokumenKerjasamaSearch extends PenjabDokumenKerjasama
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['kd_pj', 'kerjasama_berakhir', 'photo'], 'safe'],
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
        $query = PenjabDokumenKerjasama::find();

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
            'kerjasama_berakhir' => $this->kerjasama_berakhir,
        ]);

        $query->andFilterWhere(['like', 'kd_pj', $this->kd_pj])
            ->andFilterWhere(['like', 'photo', $this->photo]);

        return $dataProvider;
    }
}
