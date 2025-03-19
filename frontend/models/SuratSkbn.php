<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "surat_skbn".
 *
 * @property string $no_surat
 * @property string|null $no_rawat
 * @property string|null $tanggalsurat
 * @property string|null $kategori
 * @property string|null $kd_dokter
 * @property string|null $keperluan
 * @property string|null $opiat
 * @property string|null $ganja
 * @property string|null $amphetamin
 * @property string|null $methamphetamin
 * @property string|null $benzodiazepin
 * @property string|null $cocain
 *
 * @property Dokter $kdDokter
 * @property RegPeriksa $noRawat
 */
class SuratSkbn extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'surat_skbn';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['no_surat'], 'required'],
            [['tanggalsurat'], 'safe'],
            [['kategori', 'opiat', 'ganja', 'amphetamin', 'methamphetamin', 'benzodiazepin', 'cocain'], 'string'],
            [['no_surat'], 'string', 'max' => 25],
            [['no_rawat'], 'string', 'max' => 17],
            [['kd_dokter'], 'string', 'max' => 20],
            [['keperluan'], 'string', 'max' => 50],
            [['no_surat'], 'unique'],
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
            'no_surat' => 'No Surat',
            'no_rawat' => 'No Rawat',
            'tanggalsurat' => 'Tanggalsurat',
            'kategori' => 'Kategori',
            'kd_dokter' => 'Kd Dokter',
            'keperluan' => 'Keperluan',
            'opiat' => 'Opiat',
            'ganja' => 'Ganja',
            'amphetamin' => 'Amphetamin',
            'methamphetamin' => 'Methamphetamin',
            'benzodiazepin' => 'Benzodiazepin',
            'cocain' => 'Cocain',
        ];
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
