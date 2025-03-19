<?php

namespace frontend\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use frontend\models\AngsuranKoperasi;

/**
 * AngsuranKoperasiSearch represents the model behind the search form of `frontend\models\AngsuranKoperasi`.
 */
class AngsuranKoperasiSearch extends AngsuranKoperasi
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id'], 'integer'],
            [['tanggal_pinjam', 'tanggal_angsur'], 'safe'],
            [['pokok', 'jasa'], 'number'],
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
        $query = AngsuranKoperasi::find();

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
            'id' => $this->id,
            'tanggal_pinjam' => $this->tanggal_pinjam,
            'tanggal_angsur' => $this->tanggal_angsur,
            'pokok' => $this->pokok,
            'jasa' => $this->jasa,
        ]);

        return $dataProvider;
    }
}
