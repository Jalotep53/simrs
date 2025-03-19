<?php

namespace frontend\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use frontend\models\TemporaryPermintaanRadiologi;

/**
 * TemporaryPermintaanRadiologiSearch represents the model behind the search form of `frontend\models\TemporaryPermintaanRadiologi`.
 */
class TemporaryPermintaanRadiologiSearch extends TemporaryPermintaanRadiologi
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['no'], 'integer'],
            [['temp1', 'temp2', 'temp3', 'temp4', 'temp5', 'temp6', 'temp7', 'temp8', 'temp9', 'temp10', 'temp11', 'temp12', 'temp13', 'temp14', 'temp15', 'temp16', 'temp17', 'temp18', 'temp19', 'temp20', 'temp21', 'temp22', 'temp23', 'temp24', 'temp25', 'temp26', 'temp27', 'temp28', 'temp29', 'temp30', 'temp31', 'temp32', 'temp33', 'temp34', 'temp35', 'temp36', 'temp37'], 'safe'],
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
        $query = TemporaryPermintaanRadiologi::find();

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
            'no' => $this->no,
        ]);

        $query->andFilterWhere(['like', 'temp1', $this->temp1])
            ->andFilterWhere(['like', 'temp2', $this->temp2])
            ->andFilterWhere(['like', 'temp3', $this->temp3])
            ->andFilterWhere(['like', 'temp4', $this->temp4])
            ->andFilterWhere(['like', 'temp5', $this->temp5])
            ->andFilterWhere(['like', 'temp6', $this->temp6])
            ->andFilterWhere(['like', 'temp7', $this->temp7])
            ->andFilterWhere(['like', 'temp8', $this->temp8])
            ->andFilterWhere(['like', 'temp9', $this->temp9])
            ->andFilterWhere(['like', 'temp10', $this->temp10])
            ->andFilterWhere(['like', 'temp11', $this->temp11])
            ->andFilterWhere(['like', 'temp12', $this->temp12])
            ->andFilterWhere(['like', 'temp13', $this->temp13])
            ->andFilterWhere(['like', 'temp14', $this->temp14])
            ->andFilterWhere(['like', 'temp15', $this->temp15])
            ->andFilterWhere(['like', 'temp16', $this->temp16])
            ->andFilterWhere(['like', 'temp17', $this->temp17])
            ->andFilterWhere(['like', 'temp18', $this->temp18])
            ->andFilterWhere(['like', 'temp19', $this->temp19])
            ->andFilterWhere(['like', 'temp20', $this->temp20])
            ->andFilterWhere(['like', 'temp21', $this->temp21])
            ->andFilterWhere(['like', 'temp22', $this->temp22])
            ->andFilterWhere(['like', 'temp23', $this->temp23])
            ->andFilterWhere(['like', 'temp24', $this->temp24])
            ->andFilterWhere(['like', 'temp25', $this->temp25])
            ->andFilterWhere(['like', 'temp26', $this->temp26])
            ->andFilterWhere(['like', 'temp27', $this->temp27])
            ->andFilterWhere(['like', 'temp28', $this->temp28])
            ->andFilterWhere(['like', 'temp29', $this->temp29])
            ->andFilterWhere(['like', 'temp30', $this->temp30])
            ->andFilterWhere(['like', 'temp31', $this->temp31])
            ->andFilterWhere(['like', 'temp32', $this->temp32])
            ->andFilterWhere(['like', 'temp33', $this->temp33])
            ->andFilterWhere(['like', 'temp34', $this->temp34])
            ->andFilterWhere(['like', 'temp35', $this->temp35])
            ->andFilterWhere(['like', 'temp36', $this->temp36])
            ->andFilterWhere(['like', 'temp37', $this->temp37]);

        return $dataProvider;
    }
}
