<?php

namespace frontend\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use frontend\models\HasilPemeriksaanUsgGynecologi;

/**
 * HasilPemeriksaanUsgGynecologiSearch represents the model behind the search form of `frontend\models\HasilPemeriksaanUsgGynecologi`.
 */
class HasilPemeriksaanUsgGynecologiSearch extends HasilPemeriksaanUsgGynecologi
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['no_rawat', 'tanggal', 'kd_dokter', 'diagnosa_klinis', 'kiriman_dari', 'uterus', 'parametrium', 'ovarium', 'doppler', 'kesimpulan'], 'safe'],
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
        $query = HasilPemeriksaanUsgGynecologi::find();

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
            ->andFilterWhere(['like', 'uterus', $this->uterus])
            ->andFilterWhere(['like', 'parametrium', $this->parametrium])
            ->andFilterWhere(['like', 'ovarium', $this->ovarium])
            ->andFilterWhere(['like', 'doppler', $this->doppler])
            ->andFilterWhere(['like', 'kesimpulan', $this->kesimpulan]);

        return $dataProvider;
    }
}
