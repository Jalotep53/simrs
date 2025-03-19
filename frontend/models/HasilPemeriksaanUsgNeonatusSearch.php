<?php

namespace frontend\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use frontend\models\HasilPemeriksaanUsgNeonatus;

/**
 * HasilPemeriksaanUsgNeonatusSearch represents the model behind the search form of `frontend\models\HasilPemeriksaanUsgNeonatus`.
 */
class HasilPemeriksaanUsgNeonatusSearch extends HasilPemeriksaanUsgNeonatus
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['no_rawat', 'tanggal', 'kd_dokter', 'diagnosa_klinis', 'kiriman_dari', 'ventrikal_sinistra', 'ventrikal_dextra', 'kesan', 'kesimpulan', 'saran'], 'safe'],
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
        $query = HasilPemeriksaanUsgNeonatus::find();

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

        $query->andFilterWhere(['like', 'no_rawat', $this->no_rawat])
            ->andFilterWhere(['like', 'kd_dokter', $this->kd_dokter])
            ->andFilterWhere(['like', 'diagnosa_klinis', $this->diagnosa_klinis])
            ->andFilterWhere(['like', 'kiriman_dari', $this->kiriman_dari])
            ->andFilterWhere(['like', 'ventrikal_sinistra', $this->ventrikal_sinistra])
            ->andFilterWhere(['like', 'ventrikal_dextra', $this->ventrikal_dextra])
            ->andFilterWhere(['like', 'kesan', $this->kesan])
            ->andFilterWhere(['like', 'kesimpulan', $this->kesimpulan])
            ->andFilterWhere(['like', 'saran', $this->saran]);

        return $dataProvider;
    }
}
