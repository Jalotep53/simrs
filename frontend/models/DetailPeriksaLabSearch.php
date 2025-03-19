<?php

namespace frontend\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use frontend\models\DetailPeriksaLab;

/**
 * DetailPeriksaLabSearch represents the model behind the search form of `frontend\models\DetailPeriksaLab`.
 */
class DetailPeriksaLabSearch extends DetailPeriksaLab
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['no_rawat', 'kd_jenis_prw', 'tgl_periksa', 'jam', 'nilai', 'nilai_rujukan', 'keterangan'], 'safe'],
            [['id_template'], 'integer'],
            [['bagian_rs', 'bhp', 'bagian_perujuk', 'bagian_dokter', 'bagian_laborat', 'kso', 'menejemen', 'biaya_item'], 'number'],
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
        $query = DetailPeriksaLab::find();

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
            'bagian_rs' => $this->bagian_rs,
            'bhp' => $this->bhp,
            'bagian_perujuk' => $this->bagian_perujuk,
            'bagian_dokter' => $this->bagian_dokter,
            'bagian_laborat' => $this->bagian_laborat,
            'kso' => $this->kso,
            'menejemen' => $this->menejemen,
            'biaya_item' => $this->biaya_item,
        ]);

        $query->andFilterWhere(['like', 'no_rawat', $this->no_rawat])
            ->andFilterWhere(['like', 'kd_jenis_prw', $this->kd_jenis_prw])
            ->andFilterWhere(['like', 'nilai', $this->nilai])
            ->andFilterWhere(['like', 'nilai_rujukan', $this->nilai_rujukan])
            ->andFilterWhere(['like', 'keterangan', $this->keterangan]);

        return $dataProvider;
    }
}
