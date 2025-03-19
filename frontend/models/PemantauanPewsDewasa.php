<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "pemantauan_pews_dewasa".
 *
 * @property string $no_rawat
 * @property string $tanggal
 * @property string|null $parameter_laju_respirasi
 * @property string|null $skor_laju_respirasi
 * @property string|null $parameter_saturasi_oksigen
 * @property string|null $skor_saturasi_oksigen
 * @property string|null $parameter_suplemen_oksigen
 * @property string|null $skor_suplemen_oksigen
 * @property string|null $parameter_tekanan_darah_sistolik
 * @property string|null $skor_tekanan_darah_sistolik
 * @property string|null $parameter_laju_jantung
 * @property string|null $skor_laju_jantung
 * @property string|null $parameter_kesadaran
 * @property string|null $skor_kesadaran
 * @property string|null $parameter_temperatur
 * @property string|null $skor_temperatur
 * @property string|null $skor_total
 * @property string|null $parameter_total
 * @property string|null $nip
 *
 * @property Petugas $nip0
 * @property RegPeriksa $noRawat
 */
class PemantauanPewsDewasa extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'pemantauan_pews_dewasa';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['no_rawat', 'tanggal'], 'required'],
            [['tanggal'], 'safe'],
            [['parameter_laju_respirasi', 'parameter_saturasi_oksigen', 'parameter_suplemen_oksigen', 'parameter_tekanan_darah_sistolik', 'parameter_laju_jantung', 'parameter_kesadaran', 'parameter_temperatur'], 'string'],
            [['no_rawat'], 'string', 'max' => 17],
            [['skor_laju_respirasi', 'skor_saturasi_oksigen', 'skor_suplemen_oksigen', 'skor_tekanan_darah_sistolik', 'skor_laju_jantung', 'skor_kesadaran', 'skor_temperatur'], 'string', 'max' => 1],
            [['skor_total'], 'string', 'max' => 2],
            [['parameter_total'], 'string', 'max' => 250],
            [['nip'], 'string', 'max' => 20],
            [['no_rawat', 'tanggal'], 'unique', 'targetAttribute' => ['no_rawat', 'tanggal']],
            [['nip'], 'exist', 'skipOnError' => true, 'targetClass' => Petugas::class, 'targetAttribute' => ['nip' => 'nip']],
            [['no_rawat'], 'exist', 'skipOnError' => true, 'targetClass' => RegPeriksa::class, 'targetAttribute' => ['no_rawat' => 'no_rawat']],
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
            'parameter_laju_respirasi' => 'Parameter Laju Respirasi',
            'skor_laju_respirasi' => 'Skor Laju Respirasi',
            'parameter_saturasi_oksigen' => 'Parameter Saturasi Oksigen',
            'skor_saturasi_oksigen' => 'Skor Saturasi Oksigen',
            'parameter_suplemen_oksigen' => 'Parameter Suplemen Oksigen',
            'skor_suplemen_oksigen' => 'Skor Suplemen Oksigen',
            'parameter_tekanan_darah_sistolik' => 'Parameter Tekanan Darah Sistolik',
            'skor_tekanan_darah_sistolik' => 'Skor Tekanan Darah Sistolik',
            'parameter_laju_jantung' => 'Parameter Laju Jantung',
            'skor_laju_jantung' => 'Skor Laju Jantung',
            'parameter_kesadaran' => 'Parameter Kesadaran',
            'skor_kesadaran' => 'Skor Kesadaran',
            'parameter_temperatur' => 'Parameter Temperatur',
            'skor_temperatur' => 'Skor Temperatur',
            'skor_total' => 'Skor Total',
            'parameter_total' => 'Parameter Total',
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
