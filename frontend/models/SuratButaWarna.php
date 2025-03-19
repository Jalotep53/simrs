<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "surat_buta_warna".
 *
 * @property string $no_surat
 * @property string $no_rawat
 * @property string $tanggalperiksa
 * @property string $hasilperiksa
 *
 * @property RegPeriksa $noRawat
 */
class SuratButaWarna extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'surat_buta_warna';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['no_surat', 'no_rawat', 'tanggalperiksa', 'hasilperiksa'], 'required'],
            [['tanggalperiksa'], 'safe'],
            [['hasilperiksa'], 'string'],
            [['no_surat'], 'string', 'max' => 20],
            [['no_rawat'], 'string', 'max' => 17],
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
            'hasilperiksa' => 'Hasilperiksa',
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
