<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "penilaian_terapi_wicara".
 *
 * @property string $no_rawat
 * @property string $tanggal
 * @property string|null $diagnosa_terapi_wicara
 * @property string|null $diagnosa_medis
 * @property string $anamnesa
 * @property string $suhu
 * @property string $rr
 * @property string $nadi
 * @property string $td
 * @property string|null $perilaku_adaptif_kontak_mata
 * @property string|null $perilaku_adaptif_atensi
 * @property string|null $perilaku_adaptif_perilaku
 * @property string|null $kemampuan_bahasa_bicara_spontan
 * @property string|null $kemampuan_bahasa_pemahaman_bahasa
 * @property string|null $kemampuan_bahasa_pengujaran
 * @property string|null $kemampuan_bahasa_membaca
 * @property string|null $kemampuan_bahasa_penamaan
 * @property string $organ_wicara_anatomis_lip
 * @property string $organ_wicara_anatomis_tongue
 * @property string $organ_wicara_anatomis_hard_palate
 * @property string $organ_wicara_anatomis_soft_palate
 * @property string $organ_wicara_anatomis_uvula
 * @property string $organ_wicara_anatomis_mandibula
 * @property string $organ_wicara_anatomis_maxila
 * @property string $organ_wicara_anatomis_dental
 * @property string $organ_wicara_anatomis_faring
 * @property string $organ_wicara_fisiologis_lip
 * @property string $organ_wicara_fisiologis_tongue
 * @property string $organ_wicara_fisiologis_hard_palate
 * @property string $organ_wicara_fisiologis_soft_palate
 * @property string $organ_wicara_fisiologis_uvula
 * @property string $organ_wicara_fisiologis_mandibula
 * @property string $organ_wicara_fisiologis_maxilla
 * @property string $organ_wicara_fisiologis_dental
 * @property string $organ_wicara_fisiologis_faring
 * @property string $aktifitas_oral_menghisap
 * @property string $aktifitas_oral_mengunyah
 * @property string $aktifitas_oral_meniup
 * @property string $kemampuan_artikulasi_subtitusi
 * @property string $kemampuan_artikulasi_omisi
 * @property string $kemampuan_artikulasi_distorsi
 * @property string $kemampuan_artikulasi_adisi
 * @property string $resonasi
 * @property string $kemampuan_suara_nada
 * @property string $kemampuan_suara_kualitas
 * @property string $kemampuan_suara_kenyaringan
 * @property string $kemampuan_irama_kelancaran
 * @property string $kemampuan_menelan
 * @property string $pernafasan
 * @property string $tingkat_komunikasi_dekoding_pendengaran
 * @property string $tingkat_komunikasi_dekoding_penglihatan
 * @property string $tingkat_komunikasi_dekoding_kinesik
 * @property string $tingkat_komunikasi_enkoding_bicara
 * @property string $tingkat_komunikasi_enkoding_tulisan
 * @property string $tingkat_komunikasi_enkoding_mimik
 * @property string $tingkat_komunikasi_enkoding_gesture
 * @property string $penunjang_medis
 * @property string $perencanaan_terapi_tujuan
 * @property string $perencanaan_terapi_program
 * @property string $edukasi
 * @property string $tindak_lanjut
 * @property string $nip
 *
 * @property Petugas $nip0
 * @property RegPeriksa $noRawat
 */
class PenilaianTerapiWicara extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'penilaian_terapi_wicara';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['no_rawat', 'tanggal', 'anamnesa', 'suhu', 'rr', 'nadi', 'td', 'organ_wicara_anatomis_lip', 'organ_wicara_anatomis_tongue', 'organ_wicara_anatomis_hard_palate', 'organ_wicara_anatomis_soft_palate', 'organ_wicara_anatomis_uvula', 'organ_wicara_anatomis_mandibula', 'organ_wicara_anatomis_maxila', 'organ_wicara_anatomis_dental', 'organ_wicara_anatomis_faring', 'organ_wicara_fisiologis_lip', 'organ_wicara_fisiologis_tongue', 'organ_wicara_fisiologis_hard_palate', 'organ_wicara_fisiologis_soft_palate', 'organ_wicara_fisiologis_uvula', 'organ_wicara_fisiologis_mandibula', 'organ_wicara_fisiologis_maxilla', 'organ_wicara_fisiologis_dental', 'organ_wicara_fisiologis_faring', 'aktifitas_oral_menghisap', 'aktifitas_oral_mengunyah', 'aktifitas_oral_meniup', 'kemampuan_artikulasi_subtitusi', 'kemampuan_artikulasi_omisi', 'kemampuan_artikulasi_distorsi', 'kemampuan_artikulasi_adisi', 'resonasi', 'kemampuan_suara_nada', 'kemampuan_suara_kualitas', 'kemampuan_suara_kenyaringan', 'kemampuan_irama_kelancaran', 'kemampuan_menelan', 'pernafasan', 'tingkat_komunikasi_dekoding_pendengaran', 'tingkat_komunikasi_dekoding_penglihatan', 'tingkat_komunikasi_dekoding_kinesik', 'tingkat_komunikasi_enkoding_bicara', 'tingkat_komunikasi_enkoding_tulisan', 'tingkat_komunikasi_enkoding_mimik', 'tingkat_komunikasi_enkoding_gesture', 'penunjang_medis', 'perencanaan_terapi_tujuan', 'perencanaan_terapi_program', 'edukasi', 'tindak_lanjut', 'nip'], 'required'],
            [['tanggal'], 'safe'],
            [['resonasi', 'kemampuan_suara_nada', 'kemampuan_suara_kualitas', 'kemampuan_suara_kenyaringan', 'kemampuan_irama_kelancaran'], 'string'],
            [['no_rawat'], 'string', 'max' => 17],
            [['diagnosa_terapi_wicara', 'diagnosa_medis'], 'string', 'max' => 100],
            [['anamnesa'], 'string', 'max' => 300],
            [['suhu', 'rr', 'nadi'], 'string', 'max' => 5],
            [['td'], 'string', 'max' => 8],
            [['perilaku_adaptif_kontak_mata', 'perilaku_adaptif_atensi', 'perilaku_adaptif_perilaku', 'kemampuan_bahasa_bicara_spontan', 'kemampuan_bahasa_pemahaman_bahasa', 'kemampuan_bahasa_pengujaran', 'kemampuan_bahasa_membaca', 'kemampuan_bahasa_penamaan'], 'string', 'max' => 50],
            [['organ_wicara_anatomis_lip', 'organ_wicara_anatomis_tongue', 'organ_wicara_anatomis_hard_palate', 'organ_wicara_anatomis_soft_palate', 'organ_wicara_anatomis_uvula', 'organ_wicara_anatomis_mandibula', 'organ_wicara_anatomis_maxila', 'organ_wicara_anatomis_dental', 'organ_wicara_anatomis_faring', 'organ_wicara_fisiologis_lip', 'organ_wicara_fisiologis_tongue', 'organ_wicara_fisiologis_hard_palate', 'organ_wicara_fisiologis_soft_palate', 'organ_wicara_fisiologis_uvula', 'organ_wicara_fisiologis_mandibula', 'organ_wicara_fisiologis_maxilla', 'organ_wicara_fisiologis_dental', 'organ_wicara_fisiologis_faring', 'tingkat_komunikasi_dekoding_pendengaran', 'tingkat_komunikasi_dekoding_penglihatan', 'tingkat_komunikasi_dekoding_kinesik', 'tingkat_komunikasi_enkoding_bicara', 'tingkat_komunikasi_enkoding_tulisan', 'tingkat_komunikasi_enkoding_mimik', 'tingkat_komunikasi_enkoding_gesture'], 'string', 'max' => 30],
            [['aktifitas_oral_menghisap', 'aktifitas_oral_mengunyah', 'aktifitas_oral_meniup', 'kemampuan_artikulasi_subtitusi', 'kemampuan_artikulasi_omisi', 'kemampuan_artikulasi_distorsi', 'kemampuan_artikulasi_adisi', 'kemampuan_menelan', 'pernafasan', 'penunjang_medis', 'perencanaan_terapi_tujuan', 'perencanaan_terapi_program', 'edukasi', 'tindak_lanjut'], 'string', 'max' => 150],
            [['nip'], 'string', 'max' => 20],
            [['no_rawat'], 'unique'],
            [['no_rawat'], 'exist', 'skipOnError' => true, 'targetClass' => RegPeriksa::class, 'targetAttribute' => ['no_rawat' => 'no_rawat']],
            [['nip'], 'exist', 'skipOnError' => true, 'targetClass' => Petugas::class, 'targetAttribute' => ['nip' => 'nip']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'no_rawat' => 'No Rawat',
            'tanggal' => 'Tanggal',
            'diagnosa_terapi_wicara' => 'Diagnosa Terapi Wicara',
            'diagnosa_medis' => 'Diagnosa Medis',
            'anamnesa' => 'Anamnesa',
            'suhu' => 'Suhu',
            'rr' => 'Rr',
            'nadi' => 'Nadi',
            'td' => 'Td',
            'perilaku_adaptif_kontak_mata' => 'Perilaku Adaptif Kontak Mata',
            'perilaku_adaptif_atensi' => 'Perilaku Adaptif Atensi',
            'perilaku_adaptif_perilaku' => 'Perilaku Adaptif Perilaku',
            'kemampuan_bahasa_bicara_spontan' => 'Kemampuan Bahasa Bicara Spontan',
            'kemampuan_bahasa_pemahaman_bahasa' => 'Kemampuan Bahasa Pemahaman Bahasa',
            'kemampuan_bahasa_pengujaran' => 'Kemampuan Bahasa Pengujaran',
            'kemampuan_bahasa_membaca' => 'Kemampuan Bahasa Membaca',
            'kemampuan_bahasa_penamaan' => 'Kemampuan Bahasa Penamaan',
            'organ_wicara_anatomis_lip' => 'Organ Wicara Anatomis Lip',
            'organ_wicara_anatomis_tongue' => 'Organ Wicara Anatomis Tongue',
            'organ_wicara_anatomis_hard_palate' => 'Organ Wicara Anatomis Hard Palate',
            'organ_wicara_anatomis_soft_palate' => 'Organ Wicara Anatomis Soft Palate',
            'organ_wicara_anatomis_uvula' => 'Organ Wicara Anatomis Uvula',
            'organ_wicara_anatomis_mandibula' => 'Organ Wicara Anatomis Mandibula',
            'organ_wicara_anatomis_maxila' => 'Organ Wicara Anatomis Maxila',
            'organ_wicara_anatomis_dental' => 'Organ Wicara Anatomis Dental',
            'organ_wicara_anatomis_faring' => 'Organ Wicara Anatomis Faring',
            'organ_wicara_fisiologis_lip' => 'Organ Wicara Fisiologis Lip',
            'organ_wicara_fisiologis_tongue' => 'Organ Wicara Fisiologis Tongue',
            'organ_wicara_fisiologis_hard_palate' => 'Organ Wicara Fisiologis Hard Palate',
            'organ_wicara_fisiologis_soft_palate' => 'Organ Wicara Fisiologis Soft Palate',
            'organ_wicara_fisiologis_uvula' => 'Organ Wicara Fisiologis Uvula',
            'organ_wicara_fisiologis_mandibula' => 'Organ Wicara Fisiologis Mandibula',
            'organ_wicara_fisiologis_maxilla' => 'Organ Wicara Fisiologis Maxilla',
            'organ_wicara_fisiologis_dental' => 'Organ Wicara Fisiologis Dental',
            'organ_wicara_fisiologis_faring' => 'Organ Wicara Fisiologis Faring',
            'aktifitas_oral_menghisap' => 'Aktifitas Oral Menghisap',
            'aktifitas_oral_mengunyah' => 'Aktifitas Oral Mengunyah',
            'aktifitas_oral_meniup' => 'Aktifitas Oral Meniup',
            'kemampuan_artikulasi_subtitusi' => 'Kemampuan Artikulasi Subtitusi',
            'kemampuan_artikulasi_omisi' => 'Kemampuan Artikulasi Omisi',
            'kemampuan_artikulasi_distorsi' => 'Kemampuan Artikulasi Distorsi',
            'kemampuan_artikulasi_adisi' => 'Kemampuan Artikulasi Adisi',
            'resonasi' => 'Resonasi',
            'kemampuan_suara_nada' => 'Kemampuan Suara Nada',
            'kemampuan_suara_kualitas' => 'Kemampuan Suara Kualitas',
            'kemampuan_suara_kenyaringan' => 'Kemampuan Suara Kenyaringan',
            'kemampuan_irama_kelancaran' => 'Kemampuan Irama Kelancaran',
            'kemampuan_menelan' => 'Kemampuan Menelan',
            'pernafasan' => 'Pernafasan',
            'tingkat_komunikasi_dekoding_pendengaran' => 'Tingkat Komunikasi Dekoding Pendengaran',
            'tingkat_komunikasi_dekoding_penglihatan' => 'Tingkat Komunikasi Dekoding Penglihatan',
            'tingkat_komunikasi_dekoding_kinesik' => 'Tingkat Komunikasi Dekoding Kinesik',
            'tingkat_komunikasi_enkoding_bicara' => 'Tingkat Komunikasi Enkoding Bicara',
            'tingkat_komunikasi_enkoding_tulisan' => 'Tingkat Komunikasi Enkoding Tulisan',
            'tingkat_komunikasi_enkoding_mimik' => 'Tingkat Komunikasi Enkoding Mimik',
            'tingkat_komunikasi_enkoding_gesture' => 'Tingkat Komunikasi Enkoding Gesture',
            'penunjang_medis' => 'Penunjang Medis',
            'perencanaan_terapi_tujuan' => 'Perencanaan Terapi Tujuan',
            'perencanaan_terapi_program' => 'Perencanaan Terapi Program',
            'edukasi' => 'Edukasi',
            'tindak_lanjut' => 'Tindak Lanjut',
            'nip' => 'Nip',
        ];
    }

    /**
     * Gets query for [[Nip0]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getNip0()
    {
        return $this->hasOne(Petugas::class, ['nip' => 'nip']);
    }

    /**
     * Gets query for [[NoRawat]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getNoRawat()
    {
        return $this->hasOne(RegPeriksa::class, ['no_rawat' => 'no_rawat']);
    }
}
