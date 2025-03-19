<?php

namespace frontend\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use frontend\models\Tindakan;

/**
 * TindakanSearch represents the model behind the search form of `frontend\models\Tindakan`.
 */
class TindakanSearch extends Tindakan
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['tgl', 'nm_pasien', 'kamar', 'diagnosa'], 'safe'],
            [['id', 'tnd', 'jmlh'], 'integer'],
            [['jm'], 'number'],
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
        $query = Tindakan::find();

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
            'tgl' => $this->tgl,
            'id' => $this->id,
            'tnd' => $this->tnd,
            'jm' => $this->jm,
            'jmlh' => $this->jmlh,
        ]);

        $query->andFilterWhere(['like', 'nm_pasien', $this->nm_pasien])
            ->andFilterWhere(['like', 'kamar', $this->kamar])
            ->andFilterWhere(['like', 'diagnosa', $this->diagnosa]);

        return $dataProvider;
    }
}
