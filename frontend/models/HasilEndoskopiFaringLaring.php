<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "hasil_endoskopi_faring_laring".
 *
 * @property string $no_rawat
 * @property string $tanggal
 * @property string $kd_dokter
 * @property string $diagnosa_klinis
 * @property string $kiriman_dari
 * @property string|null $faring_uvula
 * @property string|null $faring_arkus_faring
 * @property string|null $faring_dinding_posterior
 * @property string|null $faring_tonsil
 * @property string|null $laring_tonsil_lingual
 * @property string|null $laring_valekula
 * @property string|null $laring_sinus_piriformis
 * @property string|null $laring_epiglotis
 * @property string|null $laring_arytenoid
 * @property string|null $laring_plika_ventrikularis
 * @property string|null $laring_pita_suara
 * @property string|null $laring_rima_vocalis
 * @property string|null $laring_lainlain
 * @property string|null $kesan
 * @property string|null $saran
 *
 * @property HasilEndoskopiFaringLaringGambar $hasilEndoskopiFaringLaringGambar
 * @property Dokter $kdDokter
 * @property RegPeriksa $noRawat
 */
class HasilEndoskopiFaringLaring extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'hasil_endoskopi_faring_laring';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['no_rawat', 'tanggal', 'kd_dokter', 'diagnosa_klinis', 'kiriman_dari'], 'required'],
            [['tanggal'], 'safe'],
            [['no_rawat'], 'string', 'max' => 17],
            [['kd_dokter'], 'string', 'max' => 20],
            [['diagnosa_klinis', 'kiriman_dari', 'faring_uvula', 'faring_arkus_faring', 'faring_dinding_posterior', 'faring_tonsil', 'laring_tonsil_lingual', 'laring_valekula', 'laring_sinus_piriformis', 'laring_epiglotis', 'laring_arytenoid', 'laring_plika_ventrikularis', 'laring_pita_suara', 'laring_rima_vocalis'], 'string', 'max' => 50],
            [['laring_lainlain'], 'string', 'max' => 100],
            [['kesan', 'saran'], 'string', 'max' => 300],
            [['no_rawat'], 'unique'],
            [['no_rawat'], 'exist', 'skipOnError' => true, 'targetClass' => RegPeriksa::class, 'targetAttribute' => ['no_rawat' => 'no_rawat']],
            [['kd_dokter'], 'exist', 'skipOnError' => true, 'targetClass' => Dokter::class, 'targetAttribute' => ['kd_dokter' => 'kd_dokter']],
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
            'kd_dokter' => 'Kd Dokter',
            'diagnosa_klinis' => 'Diagnosa Klinis',
            'kiriman_dari' => 'Kiriman Dari',
            'faring_uvula' => 'Faring Uvula',
            'faring_arkus_faring' => 'Faring Arkus Faring',
            'faring_dinding_posterior' => 'Faring Dinding Posterior',
            'faring_tonsil' => 'Faring Tonsil',
            'laring_tonsil_lingual' => 'Laring Tonsil Lingual',
            'laring_valekula' => 'Laring Valekula',
            'laring_sinus_piriformis' => 'Laring Sinus Piriformis',
            'laring_epiglotis' => 'Laring Epiglotis',
            'laring_arytenoid' => 'Laring Arytenoid',
            'laring_plika_ventrikularis' => 'Laring Plika Ventrikularis',
            'laring_pita_suara' => 'Laring Pita Suara',
            'laring_rima_vocalis' => 'Laring Rima Vocalis',
            'laring_lainlain' => 'Laring Lainlain',
            'kesan' => 'Kesan',
            'saran' => 'Saran',
        ];
    }

    /**
     * Gets query for [[HasilEndoskopiFaringLaringGambar]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getHasilEndoskopiFaringLaringGambar()
    {
        return $this->hasOne(HasilEndoskopiFaringLaringGambar::class, ['no_rawat' => 'no_rawat']);
    }

    /**
     * Gets query for [[KdDokter]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getKdDokter()
    {
        return $this->hasOne(Dokter::class, ['kd_dokter' => 'kd_dokter']);
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
