<?php

namespace frontend\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use frontend\models\PengajuanBiayaDisetujui;

/**
 * PengajuanBiayaDisetujuiSearch represents the model behind the search form of `frontend\models\PengajuanBiayaDisetujui`.
 */
class PengajuanBiayaDisetujuiSearch extends PengajuanBiayaDisetujui
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['no_pengajuan'], 'safe'],
            [['jumlah', 'harga', 'total'], 'number'],
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
        $query = PengajuanBiayaDisetujui::find();

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
            'jumlah' => $this->jumlah,
            'harga' => $this->harga,
            'total' => $this->total,
        ]);

        $query->andFilterWhere(['like', 'no_pengajuan', $this->no_pengajuan]);

        return $dataProvider;
    }
}
