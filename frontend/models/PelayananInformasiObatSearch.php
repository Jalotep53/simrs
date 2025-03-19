<?php

namespace frontend\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use frontend\models\PelayananInformasiObat;

/**
 * PelayananInformasiObatSearch represents the model behind the search form of `frontend\models\PelayananInformasiObat`.
 */
class PelayananInformasiObatSearch extends PelayananInformasiObat
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['no_permintaan', 'no_rawat', 'tanggal', 'metode', 'penanya', 'status_penanya', 'no_telp_penanya', 'jenis_pertanyaan', 'keterangan_jenis_pertanyaan', 'uraian_pertanyaan'], 'safe'],
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
        $query = PelayananInformasiObat::find();

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
        ]);

        $query->andFilterWhere(['like', 'no_permintaan', $this->no_permintaan])
            ->andFilterWhere(['like', 'no_rawat', $this->no_rawat])
            ->andFilterWhere(['like', 'metode', $this->metode])
            ->andFilterWhere(['like', 'penanya', $this->penanya])
            ->andFilterWhere(['like', 'status_penanya', $this->status_penanya])
            ->andFilterWhere(['like', 'no_telp_penanya', $this->no_telp_penanya])
            ->andFilterWhere(['like', 'jenis_pertanyaan', $this->jenis_pertanyaan])
            ->andFilterWhere(['like', 'keterangan_jenis_pertanyaan', $this->keterangan_jenis_pertanyaan])
            ->andFilterWhere(['like', 'uraian_pertanyaan', $this->uraian_pertanyaan]);

        return $dataProvider;
    }
}
