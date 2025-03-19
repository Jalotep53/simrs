<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "berkas_digital_perawatan".
 *
 * @property string $no_rawat
 * @property string $kode
 * @property string $lokasi_file
 *
 * @property MasterBerkasDigital $kode0
 * @property RegPeriksa $noRawat
 */
class BerkasDigitalPerawatan extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'berkas_digital_perawatan';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['no_rawat', 'kode', 'lokasi_file'], 'required'],
            [['no_rawat'], 'string', 'max' => 17],
            [['kode'], 'string', 'max' => 10],
            [['lokasi_file'], 'string', 'max' => 600],
            [['no_rawat', 'kode', 'lokasi_file'], 'unique', 'targetAttribute' => ['no_rawat', 'kode', 'lokasi_file']],
            [['no_rawat'], 'exist', 'skipOnError' => true, 'targetClass' => RegPeriksa::class, 'targetAttribute' => ['no_rawat' => 'no_rawat']],
            [['kode'], 'exist', 'skipOnError' => true, 'targetClass' => MasterBerkasDigital::class, 'targetAttribute' => ['kode' => 'kode']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'no_rawat' => 'No Rawat',
            'kode' => 'Kode',
            'lokasi_file' => 'Lokasi File',
        ];
    }

    /**
     * Gets query for [[Kode0]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getKode0()
    {
        return $this->hasOne(MasterBerkasDigital::class, ['kode' => 'kode']);
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
