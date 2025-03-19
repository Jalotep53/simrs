<?php

namespace frontend\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use frontend\models\AuditPenangananDarah;

/**
 * AuditPenangananDarahSearch represents the model behind the search form of `frontend\models\AuditPenangananDarah`.
 */
class AuditPenangananDarahSearch extends AuditPenangananDarah
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['tanggal', 'id_ruang', 'menggunakan_apd_waktu_membuang_darah', 'komponen_darah_tidak_ada_dilantai', 'membuang_darah_pada_tempat_ditentukan', 'pembersihan_areal_tumbahan_darah', 'apd_dibuang_di_limbah_infeksius', 'melakukan_kebersihan_tangan_setelah_prosedur'], 'safe'],
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
        $query = AuditPenangananDarah::find();

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
            ->andFilterWhere(['like', 'menggunakan_apd_waktu_membuang_darah', $this->menggunakan_apd_waktu_membuang_darah])
            ->andFilterWhere(['like', 'komponen_darah_tidak_ada_dilantai', $this->komponen_darah_tidak_ada_dilantai])
            ->andFilterWhere(['like', 'membuang_darah_pada_tempat_ditentukan', $this->membuang_darah_pada_tempat_ditentukan])
            ->andFilterWhere(['like', 'pembersihan_areal_tumbahan_darah', $this->pembersihan_areal_tumbahan_darah])
            ->andFilterWhere(['like', 'apd_dibuang_di_limbah_infeksius', $this->apd_dibuang_di_limbah_infeksius])
            ->andFilterWhere(['like', 'melakukan_kebersihan_tangan_setelah_prosedur', $this->melakukan_kebersihan_tangan_setelah_prosedur]);

        return $dataProvider;
    }
}
