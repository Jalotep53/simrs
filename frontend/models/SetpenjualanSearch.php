<?php

namespace frontend\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use frontend\models\Setpenjualan;

/**
 * SetpenjualanSearch represents the model behind the search form of `frontend\models\Setpenjualan`.
 */
class SetpenjualanSearch extends Setpenjualan
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['ralan', 'kelas1', 'kelas2', 'kelas3', 'utama', 'vip', 'vvip', 'beliluar', 'jualbebas', 'karyawan'], 'number'],
            [['kdjns'], 'safe'],
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
        $query = Setpenjualan::find();

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
            'ralan' => $this->ralan,
            'kelas1' => $this->kelas1,
            'kelas2' => $this->kelas2,
            'kelas3' => $this->kelas3,
            'utama' => $this->utama,
            'vip' => $this->vip,
            'vvip' => $this->vvip,
            'beliluar' => $this->beliluar,
            'jualbebas' => $this->jualbebas,
            'karyawan' => $this->karyawan,
        ]);

        $query->andFilterWhere(['like', 'kdjns', $this->kdjns]);

        return $dataProvider;
    }
}
