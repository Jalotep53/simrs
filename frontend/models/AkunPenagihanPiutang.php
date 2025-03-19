<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "akun_penagihan_piutang".
 *
 * @property string $kd_rek
 * @property string|null $nama_bank
 * @property string|null $atas_nama
 * @property string|null $no_rek
 *
 * @property Rekening $kdRek
 */
class AkunPenagihanPiutang extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'akun_penagihan_piutang';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['kd_rek'], 'required'],
            [['kd_rek'], 'string', 'max' => 15],
            [['nama_bank'], 'string', 'max' => 70],
            [['atas_nama'], 'string', 'max' => 50],
            [['no_rek'], 'string', 'max' => 20],
            [['kd_rek'], 'unique'],
            [['kd_rek'], 'exist', 'skipOnError' => true, 'targetClass' => Rekening::class, 'targetAttribute' => ['kd_rek' => 'kd_rek']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'kd_rek' => 'Kd Rek',
            'nama_bank' => 'Nama Bank',
            'atas_nama' => 'Atas Nama',
            'no_rek' => 'No Rek',
        ];
    }

    /**
     * Gets query for [[KdRek]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getKdRek()
    {
        return $this->hasOne(Rekening::class, ['kd_rek' => 'kd_rek']);
    }
}
