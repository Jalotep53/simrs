<?php

namespace frontend\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use frontend\models\InhealthJenpelRuangRawat;

/**
 * InhealthJenpelRuangRawatSearch represents the model behind the search form of `frontend\models\InhealthJenpelRuangRawat`.
 */
class InhealthJenpelRuangRawatSearch extends InhealthJenpelRuangRawat
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['kd_kamar', 'kode_jenpel_ruang_rawat', 'nama_jenpel_ruang_rawat'], 'safe'],
            [['tarif'], 'number'],
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
        $query = InhealthJenpelRuangRawat::find();

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
            'tarif' => $this->tarif,
        ]);

        $query->andFilterWhere(['like', 'kd_kamar', $this->kd_kamar])
            ->andFilterWhere(['like', 'kode_jenpel_ruang_rawat', $this->kode_jenpel_ruang_rawat])
            ->andFilterWhere(['like', 'nama_jenpel_ruang_rawat', $this->nama_jenpel_ruang_rawat]);

        return $dataProvider;
    }
}
