<?php

namespace frontend\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use frontend\models\Tampjurnal2;

/**
 * Tampjurnal2Search represents the model behind the search form of `frontend\models\Tampjurnal2`.
 */
class Tampjurnal2Search extends Tampjurnal2
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['kd_rek', 'nm_rek'], 'safe'],
            [['debet', 'kredit'], 'number'],
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
        $query = Tampjurnal2::find();

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
            'debet' => $this->debet,
            'kredit' => $this->kredit,
        ]);

        $query->andFilterWhere(['like', 'kd_rek', $this->kd_rek])
            ->andFilterWhere(['like', 'nm_rek', $this->nm_rek]);

        return $dataProvider;
    }
}
