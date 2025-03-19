<?php

namespace frontend\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use frontend\models\IpsrsHibah;

/**
 * IpsrsHibahSearch represents the model behind the search form of `frontend\models\IpsrsHibah`.
 */
class IpsrsHibahSearch extends IpsrsHibah
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['no_hibah', 'kode_pemberi', 'nip', 'tgl_hibah', 'keterangan'], 'safe'],
            [['totalhibah'], 'number'],
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
        $query = IpsrsHibah::find();

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
            'tgl_hibah' => $this->tgl_hibah,
            'totalhibah' => $this->totalhibah,
        ]);

        $query->andFilterWhere(['like', 'no_hibah', $this->no_hibah])
            ->andFilterWhere(['like', 'kode_pemberi', $this->kode_pemberi])
            ->andFilterWhere(['like', 'nip', $this->nip])
            ->andFilterWhere(['like', 'keterangan', $this->keterangan]);

        return $dataProvider;
    }
}
