<?php

namespace frontend\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use frontend\models\AuditPengelolaanLinenKotor;

/**
 * AuditPengelolaanLinenKotorSearch represents the model behind the search form of `frontend\models\AuditPengelolaanLinenKotor`.
 */
class AuditPengelolaanLinenKotorSearch extends AuditPengelolaanLinenKotor
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['tanggal', 'id_ruang', 'audit1', 'audit2', 'audit3', 'audit4', 'audit5', 'audit6', 'audit7', 'audit8'], 'safe'],
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
        $query = AuditPengelolaanLinenKotor::find();

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

        $query->andFilterWhere(['like', 'id_ruang', $this->id_ruang])
            ->andFilterWhere(['like', 'audit1', $this->audit1])
            ->andFilterWhere(['like', 'audit2', $this->audit2])
            ->andFilterWhere(['like', 'audit3', $this->audit3])
            ->andFilterWhere(['like', 'audit4', $this->audit4])
            ->andFilterWhere(['like', 'audit5', $this->audit5])
            ->andFilterWhere(['like', 'audit6', $this->audit6])
            ->andFilterWhere(['like', 'audit7', $this->audit7])
            ->andFilterWhere(['like', 'audit8', $this->audit8]);

        return $dataProvider;
    }
}
