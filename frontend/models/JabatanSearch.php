<?php

namespace frontend\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use frontend\models\Jabatan;

/**
 * JabatanSearch represents the model behind the search form of `frontend\models\Jabatan`.
 */
class JabatanSearch extends Jabatan
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['kd_jbtn', 'nm_jbtn'], 'safe'],
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
        $query = Jabatan::find();

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
        $query->andFilterWhere(['like', 'kd_jbtn', $this->kd_jbtn])
            ->andFilterWhere(['like', 'nm_jbtn', $this->nm_jbtn]);

        return $dataProvider;
    }
}
