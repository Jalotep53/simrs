<?php

namespace frontend\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use frontend\models\SuratKeluarDisposisi;

/**
 * SuratKeluarDisposisiSearch represents the model behind the search form of `frontend\models\SuratKeluarDisposisi`.
 */
class SuratKeluarDisposisiSearch extends SuratKeluarDisposisi
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['no_disposisi', 'kd_indeks', 'no_urut', 'tgl_selesai', 'isi', 'diteruskan', 'tgl_kembali', 'kepada', 'pengesahan', 'harap', 'catatan'], 'safe'],
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
        $query = SuratKeluarDisposisi::find();

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
            'tgl_selesai' => $this->tgl_selesai,
            'tgl_kembali' => $this->tgl_kembali,
        ]);

        $query->andFilterWhere(['like', 'no_disposisi', $this->no_disposisi])
            ->andFilterWhere(['like', 'kd_indeks', $this->kd_indeks])
            ->andFilterWhere(['like', 'no_urut', $this->no_urut])
            ->andFilterWhere(['like', 'isi', $this->isi])
            ->andFilterWhere(['like', 'diteruskan', $this->diteruskan])
            ->andFilterWhere(['like', 'kepada', $this->kepada])
            ->andFilterWhere(['like', 'pengesahan', $this->pengesahan])
            ->andFilterWhere(['like', 'harap', $this->harap])
            ->andFilterWhere(['like', 'catatan', $this->catatan]);

        return $dataProvider;
    }
}
