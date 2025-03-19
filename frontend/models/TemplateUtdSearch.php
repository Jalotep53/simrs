<?php

namespace frontend\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use frontend\models\TemplateUtd;

/**
 * TemplateUtdSearch represents the model behind the search form of `frontend\models\TemplateUtd`.
 */
class TemplateUtdSearch extends TemplateUtd
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['kd_jenis_prw', 'pemeriksaan', 'nilai_rujukan'], 'safe'],
            [['id_template', 'urut'], 'integer'],
            [['bagian_rs', 'bhp', 'bagian_perujuk', 'bagian_dokter', 'petugas_utd', 'kso', 'menejemen', 'biaya_item'], 'number'],
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
        $query = TemplateUtd::find();

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
            'id_template' => $this->id_template,
            'bagian_rs' => $this->bagian_rs,
            'bhp' => $this->bhp,
            'bagian_perujuk' => $this->bagian_perujuk,
            'bagian_dokter' => $this->bagian_dokter,
            'petugas_utd' => $this->petugas_utd,
            'kso' => $this->kso,
            'menejemen' => $this->menejemen,
            'biaya_item' => $this->biaya_item,
            'urut' => $this->urut,
        ]);

        $query->andFilterWhere(['like', 'kd_jenis_prw', $this->kd_jenis_prw])
            ->andFilterWhere(['like', 'pemeriksaan', $this->pemeriksaan])
            ->andFilterWhere(['like', 'nilai_rujukan', $this->nilai_rujukan]);

        return $dataProvider;
    }
}
