<?php

namespace frontend\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use frontend\models\UtdStokMedis;

/**
 * UtdStokMedisSearch represents the model behind the search form of `frontend\models\UtdStokMedis`.
 */
class UtdStokMedisSearch extends UtdStokMedis
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['kode_brng'], 'safe'],
            [['stok', 'hargaterakhir'], 'number'],
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
        $query = UtdStokMedis::find();

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
            'stok' => $this->stok,
            'hargaterakhir' => $this->hargaterakhir,
        ]);

        $query->andFilterWhere(['like', 'kode_brng', $this->kode_brng]);

        return $dataProvider;
    }
}
