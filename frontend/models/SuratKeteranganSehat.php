<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "surat_keterangan_sehat".
 *
 * @property string $no_surat
 * @property string|null $no_rawat
 * @property string $tanggalsurat
 * @property string $berat
 * @property string $tinggi
 * @property string $tensi
 * @property string $suhu
 * @property string $butawarna
 * @property string $keperluan
 * @property string $kesimpulan
 *
 * @property RegPeriksa $noRawat
 */
class SuratKeteranganSehat extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'surat_keterangan_sehat';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['no_surat', 'tanggalsurat', 'berat', 'tinggi', 'tensi', 'suhu', 'butawarna', 'keperluan', 'kesimpulan'], 'required'],
            [['tanggalsurat'], 'safe'],
            [['butawarna', 'kesimpulan'], 'string'],
            [['no_surat', 'no_rawat'], 'string', 'max' => 17],
            [['berat', 'tinggi'], 'string', 'max' => 3],
            [['tensi'], 'string', 'max' => 8],
            [['suhu'], 'string', 'max' => 4],
            [['keperluan'], 'string', 'max' => 100],
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
            'tanggalsurat' => 'Tanggalsurat',
            'berat' => 'Berat',
            'tinggi' => 'Tinggi',
            'tensi' => 'Tensi',
            'suhu' => 'Suhu',
            'butawarna' => 'Butawarna',
            'keperluan' => 'Keperluan',
            'kesimpulan' => 'Kesimpulan',
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
