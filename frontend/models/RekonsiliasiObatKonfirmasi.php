<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "rekonsiliasi_obat_konfirmasi".
 *
 * @property string $no_rekonsiliasi
 * @property string|null $diterima_farmasi
 * @property string|null $dikonfirmasi_apoteker
 * @property string|null $nip
 * @property string|null $diserahkan_pasien
 *
 * @property Petugas $nip0
 * @property RekonsiliasiObat $noRekonsiliasi
 */
class RekonsiliasiObatKonfirmasi extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'rekonsiliasi_obat_konfirmasi';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['no_rekonsiliasi'], 'required'],
            [['diterima_farmasi', 'dikonfirmasi_apoteker', 'diserahkan_pasien'], 'safe'],
            [['no_rekonsiliasi', 'nip'], 'string', 'max' => 20],
            [['no_rekonsiliasi'], 'unique'],
            [['no_rekonsiliasi'], 'exist', 'skipOnError' => true, 'targetClass' => RekonsiliasiObat::class, 'targetAttribute' => ['no_rekonsiliasi' => 'no_rekonsiliasi']],
            [['nip'], 'exist', 'skipOnError' => true, 'targetClass' => Petugas::class, 'targetAttribute' => ['nip' => 'nip']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'no_rekonsiliasi' => 'No Rekonsiliasi',
            'diterima_farmasi' => 'Diterima Farmasi',
            'dikonfirmasi_apoteker' => 'Dikonfirmasi Apoteker',
            'nip' => 'Nip',
            'diserahkan_pasien' => 'Diserahkan Pasien',
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
     * Gets query for [[NoRekonsiliasi]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getNoRekonsiliasi()
    {
        return $this->hasOne(RekonsiliasiObat::class, ['no_rekonsiliasi' => 'no_rekonsiliasi']);
    }
}
