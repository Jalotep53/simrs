<?php

namespace frontend\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use frontend\models\BuktiPersetujuanPenolakanTindakanPenerimainformasi;

/**
 * BuktiPersetujuanPenolakanTindakanPenerimainformasiSearch represents the model behind the search form of `frontend\models\BuktiPersetujuanPenolakanTindakanPenerimainformasi`.
 */
class BuktiPersetujuanPenolakanTindakanPenerimainformasiSearch extends BuktiPersetujuanPenolakanTindakanPenerimainformasi
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['no_pernyataan', 'photo'], 'safe'],
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
        $query = BuktiPersetujuanPenolakanTindakanPenerimainformasi::find();

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
        $query->andFilterWhere(['like', 'no_pernyataan', $this->no_pernyataan])
            ->andFilterWhere(['like', 'photo', $this->photo]);

        return $dataProvider;
    }
}
