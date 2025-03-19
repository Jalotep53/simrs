<?php

namespace frontend\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use frontend\models\AkunPenagihanPiutang;

/**
 * AkunPenagihanPiutangSearch represents the model behind the search form of `frontend\models\AkunPenagihanPiutang`.
 */
class AkunPenagihanPiutangSearch extends AkunPenagihanPiutang
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['kd_rek', 'nama_bank', 'atas_nama', 'no_rek'], 'safe'],
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
        $query = AkunPenagihanPiutang::find();

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
            ->andFilterWhere(['like', 'nama_bank', $this->nama_bank])
            ->andFilterWhere(['like', 'atas_nama', $this->atas_nama])
            ->andFilterWhere(['like', 'no_rek', $this->no_rek]);

        return $dataProvider;
    }
}
