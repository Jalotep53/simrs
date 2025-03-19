<?php

namespace frontend\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use frontend\models\AuditBundleIadp;

/**
 * AuditBundleIadpSearch represents the model behind the search form of `frontend\models\AuditBundleIadp`.
 */
class AuditBundleIadpSearch extends AuditBundleIadp
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['tanggal', 'nik', 'handhygiene', 'apd', 'skin_antiseptik', 'lokasi_iv', 'perawatan_rutin'], 'safe'],
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
        $query = AuditBundleIadp::find();

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

        $query->andFilterWhere(['like', 'nik', $this->nik])
            ->andFilterWhere(['like', 'handhygiene', $this->handhygiene])
            ->andFilterWhere(['like', 'apd', $this->apd])
            ->andFilterWhere(['like', 'skin_antiseptik', $this->skin_antiseptik])
            ->andFilterWhere(['like', 'lokasi_iv', $this->lokasi_iv])
            ->andFilterWhere(['like', 'perawatan_rutin', $this->perawatan_rutin]);

        return $dataProvider;
    }
}
