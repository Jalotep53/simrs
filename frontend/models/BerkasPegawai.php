<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "berkas_pegawai".
 *
 * @property string $nik
 * @property string $tgl_uploud
 * @property string $kode_berkas
 * @property string $berkas
 *
 * @property MasterBerkasPegawai $kodeBerkas
 * @property Pegawai $nik0
 */
class BerkasPegawai extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'berkas_pegawai';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nik', 'tgl_uploud', 'kode_berkas', 'berkas'], 'required'],
            [['tgl_uploud'], 'safe'],
            [['nik'], 'string', 'max' => 20],
            [['kode_berkas'], 'string', 'max' => 10],
            [['berkas'], 'string', 'max' => 500],
            [['nik'], 'exist', 'skipOnError' => true, 'targetClass' => Pegawai::class, 'targetAttribute' => ['nik' => 'nik']],
            [['kode_berkas'], 'exist', 'skipOnError' => true, 'targetClass' => MasterBerkasPegawai::class, 'targetAttribute' => ['kode_berkas' => 'kode']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'nik' => 'Nik',
            'tgl_uploud' => 'Tgl Uploud',
            'kode_berkas' => 'Kode Berkas',
            'berkas' => 'Berkas',
        ];
    }

    /**
     * Gets query for [[KodeBerkas]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getKodeBerkas()
    {
        return $this->hasOne(MasterBerkasPegawai::class, ['kode' => 'kode_berkas']);
    }

    /**
     * Gets query for [[Nik0]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getNik0()
    {
        return $this->hasOne(Pegawai::class, ['nik' => 'nik']);
    }
}
