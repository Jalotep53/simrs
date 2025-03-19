<?php

namespace frontend\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use frontend\models\PaketOperasi;

/**
 * PaketOperasiSearch represents the model behind the search form of `frontend\models\PaketOperasi`.
 */
class PaketOperasiSearch extends PaketOperasi
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['kode_paket', 'nm_perawatan', 'kategori', 'kd_pj', 'status', 'kelas'], 'safe'],
            [['operator1', 'operator2', 'operator3', 'asisten_operator1', 'asisten_operator2', 'asisten_operator3', 'instrumen', 'dokter_anak', 'perawaat_resusitas', 'dokter_anestesi', 'asisten_anestesi', 'asisten_anestesi2', 'bidan', 'bidan2', 'bidan3', 'perawat_luar', 'sewa_ok', 'alat', 'akomodasi', 'bagian_rs', 'omloop', 'omloop2', 'omloop3', 'omloop4', 'omloop5', 'sarpras', 'dokter_pjanak', 'dokter_umum'], 'number'],
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
        $query = PaketOperasi::find();

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
            'operator1' => $this->operator1,
            'operator2' => $this->operator2,
            'operator3' => $this->operator3,
            'asisten_operator1' => $this->asisten_operator1,
            'asisten_operator2' => $this->asisten_operator2,
            'asisten_operator3' => $this->asisten_operator3,
            'instrumen' => $this->instrumen,
            'dokter_anak' => $this->dokter_anak,
            'perawaat_resusitas' => $this->perawaat_resusitas,
            'dokter_anestesi' => $this->dokter_anestesi,
            'asisten_anestesi' => $this->asisten_anestesi,
            'asisten_anestesi2' => $this->asisten_anestesi2,
            'bidan' => $this->bidan,
            'bidan2' => $this->bidan2,
            'bidan3' => $this->bidan3,
            'perawat_luar' => $this->perawat_luar,
            'sewa_ok' => $this->sewa_ok,
            'alat' => $this->alat,
            'akomodasi' => $this->akomodasi,
            'bagian_rs' => $this->bagian_rs,
            'omloop' => $this->omloop,
            'omloop2' => $this->omloop2,
            'omloop3' => $this->omloop3,
            'omloop4' => $this->omloop4,
            'omloop5' => $this->omloop5,
            'sarpras' => $this->sarpras,
            'dokter_pjanak' => $this->dokter_pjanak,
            'dokter_umum' => $this->dokter_umum,
        ]);

        $query->andFilterWhere(['like', 'kode_paket', $this->kode_paket])
            ->andFilterWhere(['like', 'nm_perawatan', $this->nm_perawatan])
            ->andFilterWhere(['like', 'kategori', $this->kategori])
            ->andFilterWhere(['like', 'kd_pj', $this->kd_pj])
            ->andFilterWhere(['like', 'status', $this->status])
            ->andFilterWhere(['like', 'kelas', $this->kelas]);

        return $dataProvider;
    }
}
