<?php

namespace frontend\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use frontend\models\SetAkunBankpapua;

/**
 * SetAkunBankpapuaSearch represents the model behind the search form of `frontend\models\SetAkunBankpapua`.
 */
class SetAkunBankpapuaSearch extends SetAkunBankpapua
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['kd_rek', 'usere', 'passworde'], 'safe'],
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
        $query = SetAkunBankpapua::find();

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
            ->andFilterWhere(['like', 'usere', $this->usere])
            ->andFilterWhere(['like', 'passworde', $this->passworde]);

        return $dataProvider;
    }
}
