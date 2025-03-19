<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "mpp_evaluasi_catatan".
 *
 * @property string $no_rawat
 * @property string $tgl_implementasi
 * @property string|null $masalah
 * @property string|null $tinjut
 * @property string|null $evaluasi
 * @property string $nip
 *
 * @property Pegawai $nip0
 * @property RegPeriksa $noRawat
 */
class MppEvaluasiCatatan extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'mpp_evaluasi_catatan';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['no_rawat', 'tgl_implementasi', 'nip'], 'required'],
            [['tgl_implementasi'], 'safe'],
            [['no_rawat'], 'string', 'max' => 17],
            [['masalah', 'tinjut', 'evaluasi'], 'string', 'max' => 500],
            [['nip'], 'string', 'max' => 20],
            [['no_rawat', 'tgl_implementasi'], 'unique', 'targetAttribute' => ['no_rawat', 'tgl_implementasi']],
            [['no_rawat'], 'exist', 'skipOnError' => true, 'targetClass' => RegPeriksa::class, 'targetAttribute' => ['no_rawat' => 'no_rawat']],
            [['nip'], 'exist', 'skipOnError' => true, 'targetClass' => Pegawai::class, 'targetAttribute' => ['nip' => 'nik']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'no_rawat' => 'No Rawat',
            'tgl_implementasi' => 'Tgl Implementasi',
            'masalah' => 'Masalah',
            'tinjut' => 'Tinjut',
            'evaluasi' => 'Evaluasi',
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
        return $this->hasOne(Pegawai::class, ['nik' => 'nip']);
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
