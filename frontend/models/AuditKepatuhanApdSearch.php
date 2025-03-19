<?php

namespace frontend\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use frontend\models\AuditKepatuhanApd;

/**
 * AuditKepatuhanApdSearch represents the model behind the search form of `frontend\models\AuditKepatuhanApd`.
 */
class AuditKepatuhanApdSearch extends AuditKepatuhanApd
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nik', 'tindakan', 'tanggal', 'topi', 'masker', 'kacamata', 'sarungtangan', 'apron', 'sepatu'], 'safe'],
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
        $query = AuditKepatuhanApd::find();

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

        $query->andFilterWhere(['like', 'nik', $this->nik])
            ->andFilterWhere(['like', 'tindakan', $this->tindakan])
            ->andFilterWhere(['like', 'topi', $this->topi])
            ->andFilterWhere(['like', 'masker', $this->masker])
            ->andFilterWhere(['like', 'kacamata', $this->kacamata])
            ->andFilterWhere(['like', 'sarungtangan', $this->sarungtangan])
            ->andFilterWhere(['like', 'apron', $this->apron])
            ->andFilterWhere(['like', 'sepatu', $this->sepatu]);

        return $dataProvider;
    }
}
