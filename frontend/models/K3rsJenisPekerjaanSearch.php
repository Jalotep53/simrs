<?php

namespace frontend\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use frontend\models\K3rsJenisPekerjaan;

/**
 * K3rsJenisPekerjaanSearch represents the model behind the search form of `frontend\models\K3rsJenisPekerjaan`.
 */
class K3rsJenisPekerjaanSearch extends K3rsJenisPekerjaan
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['kode_pekerjaan', 'jenis_pekerjaan'], 'safe'],
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
        $query = K3rsJenisPekerjaan::find();

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
        $query->andFilterWhere(['like', 'kode_pekerjaan', $this->kode_pekerjaan])
            ->andFilterWhere(['like', 'jenis_pekerjaan', $this->jenis_pekerjaan]);

        return $dataProvider;
    }
}
