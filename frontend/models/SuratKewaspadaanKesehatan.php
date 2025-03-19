<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "surat_kewaspadaan_kesehatan".
 *
 * @property string $no_surat
 * @property string $no_rawat
 * @property string $tanggalperiksa
 * @property string|null $keluhan_saat_ini
 * @property string|null $keperluan
 *
 * @property RegPeriksa $noRawat
 */
class SuratKewaspadaanKesehatan extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'surat_kewaspadaan_kesehatan';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['no_surat', 'no_rawat', 'tanggalperiksa'], 'required'],
            [['tanggalperiksa'], 'safe'],
            [['no_surat'], 'string', 'max' => 20],
            [['no_rawat'], 'string', 'max' => 17],
            [['keluhan_saat_ini', 'keperluan'], 'string', 'max' => 50],
            [['no_surat'], 'unique'],
            [['no_rawat'], 'exist', 'skipOnError' => true, 'targetClass' => RegPeriksa::class, 'targetAttribute' => ['no_rawat' => 'no_rawat']],
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
            'tanggalperiksa' => 'Tanggalperiksa',
            'keluhan_saat_ini' => 'Keluhan Saat Ini',
            'keperluan' => 'Keperluan',
        ];
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
