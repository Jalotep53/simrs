<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "ubah_penjab".
 *
 * @property string $no_rawat
 * @property string $tgl_ubah
 * @property string $kd_pj1
 * @property string $kd_pj2
 *
 * @property Penjab $kdPj1
 * @property Penjab $kdPj2
 * @property RegPeriksa $noRawat
 */
class UbahPenjab extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'ubah_penjab';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['no_rawat', 'tgl_ubah', 'kd_pj1', 'kd_pj2'], 'required'],
            [['tgl_ubah'], 'safe'],
            [['no_rawat'], 'string', 'max' => 17],
            [['kd_pj1', 'kd_pj2'], 'string', 'max' => 3],
            [['no_rawat'], 'exist', 'skipOnError' => true, 'targetClass' => RegPeriksa::class, 'targetAttribute' => ['no_rawat' => 'no_rawat']],
            [['kd_pj1'], 'exist', 'skipOnError' => true, 'targetClass' => Penjab::class, 'targetAttribute' => ['kd_pj1' => 'kd_pj']],
            [['kd_pj2'], 'exist', 'skipOnError' => true, 'targetClass' => Penjab::class, 'targetAttribute' => ['kd_pj2' => 'kd_pj']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'no_rawat' => 'No Rawat',
            'tgl_ubah' => 'Tgl Ubah',
            'kd_pj1' => 'Kd Pj1',
            'kd_pj2' => 'Kd Pj2',
        ];
    }

    /**
     * Gets query for [[KdPj1]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getKdPj1()
    {
        return $this->hasOne(Penjab::class, ['kd_pj' => 'kd_pj1']);
    }

    /**
     * Gets query for [[KdPj2]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getKdPj2()
    {
        return $this->hasOne(Penjab::class, ['kd_pj' => 'kd_pj2']);
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
