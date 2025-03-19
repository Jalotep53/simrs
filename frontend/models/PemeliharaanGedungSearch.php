<?php

namespace frontend\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use frontend\models\PemeliharaanGedung;

/**
 * PemeliharaanGedungSearch represents the model behind the search form of `frontend\models\PemeliharaanGedung`.
 */
class PemeliharaanGedungSearch extends PemeliharaanGedung
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['no_pemeliharaan', 'tanggal', 'uraian_kegiatan', 'nip', 'pelaksana', 'jenis_pemeliharaan', 'tindak_lanjut'], 'safe'],
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
        $query = PemeliharaanGedung::find();

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

        $query->andFilterWhere(['like', 'no_pemeliharaan', $this->no_pemeliharaan])
            ->andFilterWhere(['like', 'uraian_kegiatan', $this->uraian_kegiatan])
            ->andFilterWhere(['like', 'nip', $this->nip])
            ->andFilterWhere(['like', 'pelaksana', $this->pelaksana])
            ->andFilterWhere(['like', 'jenis_pemeliharaan', $this->jenis_pemeliharaan])
            ->andFilterWhere(['like', 'tindak_lanjut', $this->tindak_lanjut]);

        return $dataProvider;
    }
}
