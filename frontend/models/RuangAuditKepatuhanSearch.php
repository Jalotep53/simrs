<?php

namespace frontend\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use frontend\models\RuangAuditKepatuhan;

/**
 * RuangAuditKepatuhanSearch represents the model behind the search form of `frontend\models\RuangAuditKepatuhan`.
 */
class RuangAuditKepatuhanSearch extends RuangAuditKepatuhan
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_ruang', 'nama_ruang'], 'safe'],
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
        $query = RuangAuditKepatuhan::find();

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
        $query->andFilterWhere(['like', 'id_ruang', $this->id_ruang])
            ->andFilterWhere(['like', 'nama_ruang', $this->nama_ruang]);

        return $dataProvider;
    }
}
