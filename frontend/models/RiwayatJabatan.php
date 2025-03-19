<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "riwayat_jabatan".
 *
 * @property int $id
 * @property string $jabatan
 * @property string $tmt_pangkat
 * @property string $tmt_pangkat_yad
 * @property string $pejabat_penetap
 * @property string $nomor_sk
 * @property string $tgl_sk
 * @property string $dasar_peraturan
 * @property int $masa_kerja
 * @property int $bln_kerja
 * @property string $berkas
 *
 * @property Pegawai $id0
 */
class RiwayatJabatan extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'riwayat_jabatan';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'jabatan', 'tmt_pangkat', 'tmt_pangkat_yad', 'pejabat_penetap', 'nomor_sk', 'tgl_sk', 'dasar_peraturan', 'masa_kerja', 'bln_kerja', 'berkas'], 'required'],
            [['id', 'masa_kerja', 'bln_kerja'], 'integer'],
            [['tmt_pangkat', 'tmt_pangkat_yad', 'tgl_sk'], 'safe'],
            [['jabatan', 'pejabat_penetap', 'dasar_peraturan'], 'string', 'max' => 50],
            [['nomor_sk'], 'string', 'max' => 25],
            [['berkas'], 'string', 'max' => 500],
            [['id', 'jabatan'], 'unique', 'targetAttribute' => ['id', 'jabatan']],
            [['id'], 'exist', 'skipOnError' => true, 'targetClass' => Pegawai::class, 'targetAttribute' => ['id' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'jabatan' => 'Jabatan',
            'tmt_pangkat' => 'Tmt Pangkat',
            'tmt_pangkat_yad' => 'Tmt Pangkat Yad',
            'pejabat_penetap' => 'Pejabat Penetap',
            'nomor_sk' => 'Nomor Sk',
            'tgl_sk' => 'Tgl Sk',
            'dasar_peraturan' => 'Dasar Peraturan',
            'masa_kerja' => 'Masa Kerja',
            'bln_kerja' => 'Bln Kerja',
            'berkas' => 'Berkas',
        ];
    }

    /**
     * Gets query for [[Id0]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getId0()
    {
        return $this->hasOne(Pegawai::class, ['id' => 'id']);
    }
}
