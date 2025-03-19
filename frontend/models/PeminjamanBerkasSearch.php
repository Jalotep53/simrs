<?php

namespace frontend\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use frontend\models\PeminjamanBerkas;

/**
 * PeminjamanBerkasSearch represents the model behind the search form of `frontend\models\PeminjamanBerkas`.
 */
class PeminjamanBerkasSearch extends PeminjamanBerkas
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['peminjam', 'id_ruang', 'no_rkm_medis', 'tgl_pinjam', 'tgl_kembali', 'nip', 'status_pinjam'], 'safe'],
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
        $query = PeminjamanBerkas::find();

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
            'tgl_pinjam' => $this->tgl_pinjam,
            'tgl_kembali' => $this->tgl_kembali,
        ]);

        $query->andFilterWhere(['like', 'peminjam', $this->peminjam])
            ->andFilterWhere(['like', 'id_ruang', $this->id_ruang])
            ->andFilterWhere(['like', 'no_rkm_medis', $this->no_rkm_medis])
            ->andFilterWhere(['like', 'nip', $this->nip])
            ->andFilterWhere(['like', 'status_pinjam', $this->status_pinjam]);

        return $dataProvider;
    }
}
