<?php

namespace frontend\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use frontend\models\BayarDetailPeriksaLabPerujuk;

/**
 * BayarDetailPeriksaLabPerujukSearch represents the model behind the search form of `frontend\models\BayarDetailPeriksaLabPerujuk`.
 */
class BayarDetailPeriksaLabPerujukSearch extends BayarDetailPeriksaLabPerujuk
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['no_bayar', 'no_rawat', 'kd_jenis_prw', 'tgl_periksa', 'jam'], 'safe'],
            [['id_template'], 'integer'],
            [['bagian_perujuk'], 'number'],
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
        $query = BayarDetailPeriksaLabPerujuk::find();

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
            'tgl_periksa' => $this->tgl_periksa,
            'jam' => $this->jam,
            'id_template' => $this->id_template,
            'bagian_perujuk' => $this->bagian_perujuk,
        ]);

        $query->andFilterWhere(['like', 'no_bayar', $this->no_bayar])
            ->andFilterWhere(['like', 'no_rawat', $this->no_rawat])
            ->andFilterWhere(['like', 'kd_jenis_prw', $this->kd_jenis_prw]);

        return $dataProvider;
    }
}
