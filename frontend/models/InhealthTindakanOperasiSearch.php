<?php

namespace frontend\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use frontend\models\InhealthTindakanOperasi;

/**
 * InhealthTindakanOperasiSearch represents the model behind the search form of `frontend\models\InhealthTindakanOperasi`.
 */
class InhealthTindakanOperasiSearch extends InhealthTindakanOperasi
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['kode_paket', 'kd_inhealth'], 'safe'],
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
        $query = InhealthTindakanOperasi::find();

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
        $query->andFilterWhere(['like', 'kode_paket', $this->kode_paket])
            ->andFilterWhere(['like', 'kd_inhealth', $this->kd_inhealth]);

        return $dataProvider;
    }
}
