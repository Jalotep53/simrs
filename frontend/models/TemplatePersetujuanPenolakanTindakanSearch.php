<?php

namespace frontend\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use frontend\models\TemplatePersetujuanPenolakanTindakan;

/**
 * TemplatePersetujuanPenolakanTindakanSearch represents the model behind the search form of `frontend\models\TemplatePersetujuanPenolakanTindakan`.
 */
class TemplatePersetujuanPenolakanTindakanSearch extends TemplatePersetujuanPenolakanTindakan
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['kode_template', 'diagnosa', 'tindakan', 'indikasi_tindakan', 'tata_cara', 'tujuan', 'risiko', 'komplikasi', 'prognosis', 'alternatif_dan_risikonya', 'lain_lain'], 'safe'],
            [['biaya'], 'number'],
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
        $query = TemplatePersetujuanPenolakanTindakan::find();

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
            'biaya' => $this->biaya,
        ]);

        $query->andFilterWhere(['like', 'kode_template', $this->kode_template])
            ->andFilterWhere(['like', 'diagnosa', $this->diagnosa])
            ->andFilterWhere(['like', 'tindakan', $this->tindakan])
            ->andFilterWhere(['like', 'indikasi_tindakan', $this->indikasi_tindakan])
            ->andFilterWhere(['like', 'tata_cara', $this->tata_cara])
            ->andFilterWhere(['like', 'tujuan', $this->tujuan])
            ->andFilterWhere(['like', 'risiko', $this->risiko])
            ->andFilterWhere(['like', 'komplikasi', $this->komplikasi])
            ->andFilterWhere(['like', 'prognosis', $this->prognosis])
            ->andFilterWhere(['like', 'alternatif_dan_risikonya', $this->alternatif_dan_risikonya])
            ->andFilterWhere(['like', 'lain_lain', $this->lain_lain]);

        return $dataProvider;
    }
}
