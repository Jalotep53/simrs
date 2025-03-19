<?php

namespace frontend\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use frontend\models\KelompokJabatan;

/**
 * KelompokJabatanSearch represents the model behind the search form of `frontend\models\KelompokJabatan`.
 */
class KelompokJabatanSearch extends KelompokJabatan
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['kode_kelompok', 'nama_kelompok'], 'safe'],
            [['indek'], 'integer'],
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
        $query = KelompokJabatan::find();

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
            'indek' => $this->indek,
        ]);

        $query->andFilterWhere(['like', 'kode_kelompok', $this->kode_kelompok])
            ->andFilterWhere(['like', 'nama_kelompok', $this->nama_kelompok]);

        return $dataProvider;
    }
}
