<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "asuhan_gizi".
 *
 * @property string $no_rawat
 * @property string $tanggal
 * @property string|null $antropometri_bb
 * @property string|null $antropometri_tb
 * @property string|null $antropometri_imt
 * @property string|null $antropometri_lla
 * @property string|null $antropometri_tl
 * @property string $antropometri_ulna
 * @property string $antropometri_bbideal
 * @property string $antropometri_bbperu
 * @property string $antropometri_tbperu
 * @property string $antropometri_bbpertb
 * @property string $antropometri_llaperu
 * @property string|null $biokimia
 * @property string|null $fisik_klinis
 * @property string|null $alergi_telur
 * @property string|null $alergi_susu_sapi
 * @property string|null $alergi_kacang
 * @property string|null $alergi_gluten
 * @property string|null $alergi_udang
 * @property string|null $alergi_ikan
 * @property string|null $alergi_hazelnut
 * @property string|null $pola_makan
 * @property string|null $riwayat_personal
 * @property string|null $diagnosis
 * @property string|null $intervensi_gizi
 * @property string|null $monitoring_evaluasi
 * @property string $nip
 *
 * @property Petugas $nip0
 * @property RegPeriksa $noRawat
 */
class AsuhanGizi extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'asuhan_gizi';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['no_rawat', 'tanggal', 'antropometri_ulna', 'antropometri_bbideal', 'antropometri_bbperu', 'antropometri_tbperu', 'antropometri_bbpertb', 'antropometri_llaperu', 'nip'], 'required'],
            [['tanggal'], 'safe'],
            [['alergi_telur', 'alergi_susu_sapi', 'alergi_kacang', 'alergi_gluten', 'alergi_udang', 'alergi_ikan', 'alergi_hazelnut'], 'string'],
            [['no_rawat'], 'string', 'max' => 17],
            [['antropometri_bb', 'antropometri_tb', 'antropometri_imt', 'antropometri_lla', 'antropometri_tl', 'antropometri_ulna', 'antropometri_bbideal', 'antropometri_bbperu', 'antropometri_tbperu', 'antropometri_bbpertb', 'antropometri_llaperu'], 'string', 'max' => 5],
            [['biokimia', 'riwayat_personal', 'monitoring_evaluasi'], 'string', 'max' => 1000],
            [['fisik_klinis', 'pola_makan', 'diagnosis', 'intervensi_gizi'], 'string', 'max' => 2000],
            [['nip'], 'string', 'max' => 20],
            [['no_rawat', 'tanggal'], 'unique', 'targetAttribute' => ['no_rawat', 'tanggal']],
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
            'antropometri_bb' => 'Antropometri Bb',
            'antropometri_tb' => 'Antropometri Tb',
            'antropometri_imt' => 'Antropometri Imt',
            'antropometri_lla' => 'Antropometri Lla',
            'antropometri_tl' => 'Antropometri Tl',
            'antropometri_ulna' => 'Antropometri Ulna',
            'antropometri_bbideal' => 'Antropometri Bbideal',
            'antropometri_bbperu' => 'Antropometri Bbperu',
            'antropometri_tbperu' => 'Antropometri Tbperu',
            'antropometri_bbpertb' => 'Antropometri Bbpertb',
            'antropometri_llaperu' => 'Antropometri Llaperu',
            'biokimia' => 'Biokimia',
            'fisik_klinis' => 'Fisik Klinis',
            'alergi_telur' => 'Alergi Telur',
            'alergi_susu_sapi' => 'Alergi Susu Sapi',
            'alergi_kacang' => 'Alergi Kacang',
            'alergi_gluten' => 'Alergi Gluten',
            'alergi_udang' => 'Alergi Udang',
            'alergi_ikan' => 'Alergi Ikan',
            'alergi_hazelnut' => 'Alergi Hazelnut',
            'pola_makan' => 'Pola Makan',
            'riwayat_personal' => 'Riwayat Personal',
            'diagnosis' => 'Diagnosis',
            'intervensi_gizi' => 'Intervensi Gizi',
            'monitoring_evaluasi' => 'Monitoring Evaluasi',
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
