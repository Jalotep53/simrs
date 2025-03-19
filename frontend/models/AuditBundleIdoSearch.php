<?php

namespace frontend\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use frontend\models\AuditBundleIdo;

/**
 * AuditBundleIdoSearch represents the model behind the search form of `frontend\models\AuditBundleIdo`.
 */
class AuditBundleIdoSearch extends AuditBundleIdo
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['tanggal', 'id_ruang', 'pencukuran_rambut', 'antibiotik', 'temperature', 'sugar'], 'safe'],
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
        $query = AuditBundleIdo::find();

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
            'tanggal' => $this->tanggal,
        ]);

        $query->andFilterWhere(['like', 'id_ruang', $this->id_ruang])
            ->andFilterWhere(['like', 'pencukuran_rambut', $this->pencukuran_rambut])
            ->andFilterWhere(['like', 'antibiotik', $this->antibiotik])
            ->andFilterWhere(['like', 'temperature', $this->temperature])
            ->andFilterWhere(['like', 'sugar', $this->sugar]);

        return $dataProvider;
    }
}
