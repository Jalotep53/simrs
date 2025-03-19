<?php

namespace frontend\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use frontend\models\SetAkunMandiri;

/**
 * SetAkunMandiriSearch represents the model behind the search form of `frontend\models\SetAkunMandiri`.
 */
class SetAkunMandiriSearch extends SetAkunMandiri
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['kd_rek', 'kd_rek_biaya', 'username', 'password', 'client_id', 'client_secret', 'kode_rs', 'kode_mcm', 'no_rekening'], 'safe'],
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
        $query = SetAkunMandiri::find();

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
            ->andFilterWhere(['like', 'kd_rek_biaya', $this->kd_rek_biaya])
            ->andFilterWhere(['like', 'username', $this->username])
            ->andFilterWhere(['like', 'password', $this->password])
            ->andFilterWhere(['like', 'client_id', $this->client_id])
            ->andFilterWhere(['like', 'client_secret', $this->client_secret])
            ->andFilterWhere(['like', 'kode_rs', $this->kode_rs])
            ->andFilterWhere(['like', 'kode_mcm', $this->kode_mcm])
            ->andFilterWhere(['like', 'no_rekening', $this->no_rekening]);

        return $dataProvider;
    }
}
