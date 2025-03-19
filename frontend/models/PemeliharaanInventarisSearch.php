<?php

namespace frontend\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use frontend\models\PemeliharaanInventaris;

/**
 * PemeliharaanInventarisSearch represents the model behind the search form of `frontend\models\PemeliharaanInventaris`.
 */
class PemeliharaanInventarisSearch extends PemeliharaanInventaris
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['no_inventaris', 'tanggal', 'uraian_kegiatan', 'nip', 'pelaksana', 'jenis_pemeliharaan'], 'safe'],
            [['biaya'], 'number'],
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
        $query = PemeliharaanInventaris::find();

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
            'tanggal' => $this->tanggal,
            'biaya' => $this->biaya,
        ]);

        $query->andFilterWhere(['like', 'no_inventaris', $this->no_inventaris])
            ->andFilterWhere(['like', 'uraian_kegiatan', $this->uraian_kegiatan])
            ->andFilterWhere(['like', 'nip', $this->nip])
            ->andFilterWhere(['like', 'pelaksana', $this->pelaksana])
            ->andFilterWhere(['like', 'jenis_pemeliharaan', $this->jenis_pemeliharaan]);

        return $dataProvider;
    }
}
