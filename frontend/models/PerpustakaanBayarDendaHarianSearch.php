<?php

namespace frontend\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use frontend\models\PerpustakaanBayarDendaHarian;

/**
 * PerpustakaanBayarDendaHarianSearch represents the model behind the search form of `frontend\models\PerpustakaanBayarDendaHarian`.
 */
class PerpustakaanBayarDendaHarianSearch extends PerpustakaanBayarDendaHarian
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['tgl_denda', 'no_anggota', 'no_inventaris'], 'safe'],
            [['keterlambatan'], 'integer'],
            [['besar_denda'], 'number'],
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
        $query = PerpustakaanBayarDendaHarian::find();

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
            'tgl_denda' => $this->tgl_denda,
            'keterlambatan' => $this->keterlambatan,
            'besar_denda' => $this->besar_denda,
        ]);

        $query->andFilterWhere(['like', 'no_anggota', $this->no_anggota])
            ->andFilterWhere(['like', 'no_inventaris', $this->no_inventaris]);

        return $dataProvider;
    }
}
