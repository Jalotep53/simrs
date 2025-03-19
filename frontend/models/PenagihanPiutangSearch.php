<?php

namespace frontend\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use frontend\models\PenagihanPiutang;

/**
 * PenagihanPiutangSearch represents the model behind the search form of `frontend\models\PenagihanPiutang`.
 */
class PenagihanPiutangSearch extends PenagihanPiutang
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['no_tagihan', 'tanggal', 'tanggaltempo', 'nip', 'nip_menyetujui', 'kd_pj', 'catatan', 'kd_rek', 'status'], 'safe'],
            [['tempo'], 'integer'],
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
        $query = PenagihanPiutang::find();

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
            'tanggaltempo' => $this->tanggaltempo,
            'tempo' => $this->tempo,
        ]);

        $query->andFilterWhere(['like', 'no_tagihan', $this->no_tagihan])
            ->andFilterWhere(['like', 'nip', $this->nip])
            ->andFilterWhere(['like', 'nip_menyetujui', $this->nip_menyetujui])
            ->andFilterWhere(['like', 'kd_pj', $this->kd_pj])
            ->andFilterWhere(['like', 'catatan', $this->catatan])
            ->andFilterWhere(['like', 'kd_rek', $this->kd_rek])
            ->andFilterWhere(['like', 'status', $this->status]);

        return $dataProvider;
    }
}
