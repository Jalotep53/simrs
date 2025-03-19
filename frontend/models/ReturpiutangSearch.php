<?php

namespace frontend\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use frontend\models\Returpiutang;

/**
 * ReturpiutangSearch represents the model behind the search form of `frontend\models\Returpiutang`.
 */
class ReturpiutangSearch extends Returpiutang
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['no_retur_piutang', 'tgl_retur', 'nip', 'no_rkm_medis', 'kd_bangsal'], 'safe'],
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
        $query = Returpiutang::find();

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
            'tgl_retur' => $this->tgl_retur,
        ]);

        $query->andFilterWhere(['like', 'no_retur_piutang', $this->no_retur_piutang])
            ->andFilterWhere(['like', 'nip', $this->nip])
            ->andFilterWhere(['like', 'no_rkm_medis', $this->no_rkm_medis])
            ->andFilterWhere(['like', 'kd_bangsal', $this->kd_bangsal]);

        return $dataProvider;
    }
}
