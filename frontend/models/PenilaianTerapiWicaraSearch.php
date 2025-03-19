<?php

namespace frontend\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use frontend\models\PenilaianTerapiWicara;

/**
 * PenilaianTerapiWicaraSearch represents the model behind the search form of `frontend\models\PenilaianTerapiWicara`.
 */
class PenilaianTerapiWicaraSearch extends PenilaianTerapiWicara
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['no_rawat', 'tanggal', 'diagnosa_terapi_wicara', 'diagnosa_medis', 'anamnesa', 'suhu', 'rr', 'nadi', 'td', 'perilaku_adaptif_kontak_mata', 'perilaku_adaptif_atensi', 'perilaku_adaptif_perilaku', 'kemampuan_bahasa_bicara_spontan', 'kemampuan_bahasa_pemahaman_bahasa', 'kemampuan_bahasa_pengujaran', 'kemampuan_bahasa_membaca', 'kemampuan_bahasa_penamaan', 'organ_wicara_anatomis_lip', 'organ_wicara_anatomis_tongue', 'organ_wicara_anatomis_hard_palate', 'organ_wicara_anatomis_soft_palate', 'organ_wicara_anatomis_uvula', 'organ_wicara_anatomis_mandibula', 'organ_wicara_anatomis_maxila', 'organ_wicara_anatomis_dental', 'organ_wicara_anatomis_faring', 'organ_wicara_fisiologis_lip', 'organ_wicara_fisiologis_tongue', 'organ_wicara_fisiologis_hard_palate', 'organ_wicara_fisiologis_soft_palate', 'organ_wicara_fisiologis_uvula', 'organ_wicara_fisiologis_mandibula', 'organ_wicara_fisiologis_maxilla', 'organ_wicara_fisiologis_dental', 'organ_wicara_fisiologis_faring', 'aktifitas_oral_menghisap', 'aktifitas_oral_mengunyah', 'aktifitas_oral_meniup', 'kemampuan_artikulasi_subtitusi', 'kemampuan_artikulasi_omisi', 'kemampuan_artikulasi_distorsi', 'kemampuan_artikulasi_adisi', 'resonasi', 'kemampuan_suara_nada', 'kemampuan_suara_kualitas', 'kemampuan_suara_kenyaringan', 'kemampuan_irama_kelancaran', 'kemampuan_menelan', 'pernafasan', 'tingkat_komunikasi_dekoding_pendengaran', 'tingkat_komunikasi_dekoding_penglihatan', 'tingkat_komunikasi_dekoding_kinesik', 'tingkat_komunikasi_enkoding_bicara', 'tingkat_komunikasi_enkoding_tulisan', 'tingkat_komunikasi_enkoding_mimik', 'tingkat_komunikasi_enkoding_gesture', 'penunjang_medis', 'perencanaan_terapi_tujuan', 'perencanaan_terapi_program', 'edukasi', 'tindak_lanjut', 'nip'], 'safe'],
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
        $query = PenilaianTerapiWicara::find();

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

        $query->andFilterWhere(['like', 'no_rawat', $this->no_rawat])
            ->andFilterWhere(['like', 'diagnosa_terapi_wicara', $this->diagnosa_terapi_wicara])
            ->andFilterWhere(['like', 'diagnosa_medis', $this->diagnosa_medis])
            ->andFilterWhere(['like', 'anamnesa', $this->anamnesa])
            ->andFilterWhere(['like', 'suhu', $this->suhu])
            ->andFilterWhere(['like', 'rr', $this->rr])
            ->andFilterWhere(['like', 'nadi', $this->nadi])
            ->andFilterWhere(['like', 'td', $this->td])
            ->andFilterWhere(['like', 'perilaku_adaptif_kontak_mata', $this->perilaku_adaptif_kontak_mata])
            ->andFilterWhere(['like', 'perilaku_adaptif_atensi', $this->perilaku_adaptif_atensi])
            ->andFilterWhere(['like', 'perilaku_adaptif_perilaku', $this->perilaku_adaptif_perilaku])
            ->andFilterWhere(['like', 'kemampuan_bahasa_bicara_spontan', $this->kemampuan_bahasa_bicara_spontan])
            ->andFilterWhere(['like', 'kemampuan_bahasa_pemahaman_bahasa', $this->kemampuan_bahasa_pemahaman_bahasa])
            ->andFilterWhere(['like', 'kemampuan_bahasa_pengujaran', $this->kemampuan_bahasa_pengujaran])
            ->andFilterWhere(['like', 'kemampuan_bahasa_membaca', $this->kemampuan_bahasa_membaca])
            ->andFilterWhere(['like', 'kemampuan_bahasa_penamaan', $this->kemampuan_bahasa_penamaan])
            ->andFilterWhere(['like', 'organ_wicara_anatomis_lip', $this->organ_wicara_anatomis_lip])
            ->andFilterWhere(['like', 'organ_wicara_anatomis_tongue', $this->organ_wicara_anatomis_tongue])
            ->andFilterWhere(['like', 'organ_wicara_anatomis_hard_palate', $this->organ_wicara_anatomis_hard_palate])
            ->andFilterWhere(['like', 'organ_wicara_anatomis_soft_palate', $this->organ_wicara_anatomis_soft_palate])
            ->andFilterWhere(['like', 'organ_wicara_anatomis_uvula', $this->organ_wicara_anatomis_uvula])
            ->andFilterWhere(['like', 'organ_wicara_anatomis_mandibula', $this->organ_wicara_anatomis_mandibula])
            ->andFilterWhere(['like', 'organ_wicara_anatomis_maxila', $this->organ_wicara_anatomis_maxila])
            ->andFilterWhere(['like', 'organ_wicara_anatomis_dental', $this->organ_wicara_anatomis_dental])
            ->andFilterWhere(['like', 'organ_wicara_anatomis_faring', $this->organ_wicara_anatomis_faring])
            ->andFilterWhere(['like', 'organ_wicara_fisiologis_lip', $this->organ_wicara_fisiologis_lip])
            ->andFilterWhere(['like', 'organ_wicara_fisiologis_tongue', $this->organ_wicara_fisiologis_tongue])
            ->andFilterWhere(['like', 'organ_wicara_fisiologis_hard_palate', $this->organ_wicara_fisiologis_hard_palate])
            ->andFilterWhere(['like', 'organ_wicara_fisiologis_soft_palate', $this->organ_wicara_fisiologis_soft_palate])
            ->andFilterWhere(['like', 'organ_wicara_fisiologis_uvula', $this->organ_wicara_fisiologis_uvula])
            ->andFilterWhere(['like', 'organ_wicara_fisiologis_mandibula', $this->organ_wicara_fisiologis_mandibula])
            ->andFilterWhere(['like', 'organ_wicara_fisiologis_maxilla', $this->organ_wicara_fisiologis_maxilla])
            ->andFilterWhere(['like', 'organ_wicara_fisiologis_dental', $this->organ_wicara_fisiologis_dental])
            ->andFilterWhere(['like', 'organ_wicara_fisiologis_faring', $this->organ_wicara_fisiologis_faring])
            ->andFilterWhere(['like', 'aktifitas_oral_menghisap', $this->aktifitas_oral_menghisap])
            ->andFilterWhere(['like', 'aktifitas_oral_mengunyah', $this->aktifitas_oral_mengunyah])
            ->andFilterWhere(['like', 'aktifitas_oral_meniup', $this->aktifitas_oral_meniup])
            ->andFilterWhere(['like', 'kemampuan_artikulasi_subtitusi', $this->kemampuan_artikulasi_subtitusi])
            ->andFilterWhere(['like', 'kemampuan_artikulasi_omisi', $this->kemampuan_artikulasi_omisi])
            ->andFilterWhere(['like', 'kemampuan_artikulasi_distorsi', $this->kemampuan_artikulasi_distorsi])
            ->andFilterWhere(['like', 'kemampuan_artikulasi_adisi', $this->kemampuan_artikulasi_adisi])
            ->andFilterWhere(['like', 'resonasi', $this->resonasi])
            ->andFilterWhere(['like', 'kemampuan_suara_nada', $this->kemampuan_suara_nada])
            ->andFilterWhere(['like', 'kemampuan_suara_kualitas', $this->kemampuan_suara_kualitas])
            ->andFilterWhere(['like', 'kemampuan_suara_kenyaringan', $this->kemampuan_suara_kenyaringan])
            ->andFilterWhere(['like', 'kemampuan_irama_kelancaran', $this->kemampuan_irama_kelancaran])
            ->andFilterWhere(['like', 'kemampuan_menelan', $this->kemampuan_menelan])
            ->andFilterWhere(['like', 'pernafasan', $this->pernafasan])
            ->andFilterWhere(['like', 'tingkat_komunikasi_dekoding_pendengaran', $this->tingkat_komunikasi_dekoding_pendengaran])
            ->andFilterWhere(['like', 'tingkat_komunikasi_dekoding_penglihatan', $this->tingkat_komunikasi_dekoding_penglihatan])
            ->andFilterWhere(['like', 'tingkat_komunikasi_dekoding_kinesik', $this->tingkat_komunikasi_dekoding_kinesik])
            ->andFilterWhere(['like', 'tingkat_komunikasi_enkoding_bicara', $this->tingkat_komunikasi_enkoding_bicara])
            ->andFilterWhere(['like', 'tingkat_komunikasi_enkoding_tulisan', $this->tingkat_komunikasi_enkoding_tulisan])
            ->andFilterWhere(['like', 'tingkat_komunikasi_enkoding_mimik', $this->tingkat_komunikasi_enkoding_mimik])
            ->andFilterWhere(['like', 'tingkat_komunikasi_enkoding_gesture', $this->tingkat_komunikasi_enkoding_gesture])
            ->andFilterWhere(['like', 'penunjang_medis', $this->penunjang_medis])
            ->andFilterWhere(['like', 'perencanaan_terapi_tujuan', $this->perencanaan_terapi_tujuan])
            ->andFilterWhere(['like', 'perencanaan_terapi_program', $this->perencanaan_terapi_program])
            ->andFilterWhere(['like', 'edukasi', $this->edukasi])
            ->andFilterWhere(['like', 'tindak_lanjut', $this->tindak_lanjut])
            ->andFilterWhere(['like', 'nip', $this->nip]);

        return $dataProvider;
    }
}
