<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "surat_cuti_hamil".
 *
 * @property string $no_rawat
 * @property string|null $keterangan_hamil
 * @property string|null $terhitung_mulai
 * @property string|null $perkiraan_lahir
 * @property string|null $no_surat
 *
 * @property RegPeriksa $noRawat
 */
class SuratCutiHamil extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'surat_cuti_hamil';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['no_rawat'], 'required'],
            [['terhitung_mulai', 'perkiraan_lahir'], 'safe'],
            [['no_rawat'], 'string', 'max' => 17],
            [['keterangan_hamil'], 'string', 'max' => 25],
            [['no_surat'], 'string', 'max' => 20],
            [['no_surat'], 'unique'],
            [['no_rawat'], 'unique'],
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
            'keterangan_hamil' => 'Keterangan Hamil',
            'terhitung_mulai' => 'Terhitung Mulai',
            'perkiraan_lahir' => 'Perkiraan Lahir',
            'no_surat' => 'No Surat',
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
