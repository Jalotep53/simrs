<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "audit_bundle_iadp".
 *
 * @property string $tanggal
 * @property string $nik
 * @property string|null $handhygiene
 * @property string|null $apd
 * @property string|null $skin_antiseptik
 * @property string|null $lokasi_iv
 * @property string|null $perawatan_rutin
 *
 * @property Pegawai $nik0
 */
class AuditBundleIadp extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'audit_bundle_iadp';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['tanggal', 'nik'], 'required'],
            [['tanggal'], 'safe'],
            [['handhygiene', 'apd', 'skin_antiseptik', 'lokasi_iv', 'perawatan_rutin'], 'string'],
            [['nik'], 'string', 'max' => 20],
            [['tanggal', 'nik'], 'unique', 'targetAttribute' => ['tanggal', 'nik']],
            [['nik'], 'exist', 'skipOnError' => true, 'targetClass' => Pegawai::class, 'targetAttribute' => ['nik' => 'nik']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'tanggal' => 'Tanggal',
            'nik' => 'Nik',
            'handhygiene' => 'Handhygiene',
            'apd' => 'Apd',
            'skin_antiseptik' => 'Skin Antiseptik',
            'lokasi_iv' => 'Lokasi Iv',
            'perawatan_rutin' => 'Perawatan Rutin',
        ];
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
