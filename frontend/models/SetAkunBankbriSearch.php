<?php

namespace frontend\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use frontend\models\SetAkunBankbri;

/**
 * SetAkunBankbriSearch represents the model behind the search form of `frontend\models\SetAkunBankbri`.
 */
class SetAkunBankbriSearch extends SetAkunBankbri
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['kd_rek', 'consumer_key', 'consumer_secret', 'institution_code', 'briva_no', 'urlapi'], 'safe'],
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
        $query = SetAkunBankbri::find();

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
        $query->andFilterWhere(['like', 'kd_rek', $this->kd_rek])
            ->andFilterWhere(['like', 'consumer_key', $this->consumer_key])
            ->andFilterWhere(['like', 'consumer_secret', $this->consumer_secret])
            ->andFilterWhere(['like', 'institution_code', $this->institution_code])
            ->andFilterWhere(['like', 'briva_no', $this->briva_no])
            ->andFilterWhere(['like', 'urlapi', $this->urlapi]);

        return $dataProvider;
    }
}
