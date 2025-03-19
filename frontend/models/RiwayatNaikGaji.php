<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "riwayat_naik_gaji".
 *
 * @property int $id
 * @property string $pangkatjabatan
 * @property float $gapok
 * @property string $tmt_berkala
 * @property string $tmt_berkala_yad
 * @property string $no_sk
 * @property string $tgl_sk
 * @property int $masa_kerja
 * @property int $bulan_kerja
 * @property string $berkas
 *
 * @property Pegawai $id0
 */
class RiwayatNaikGaji extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'riwayat_naik_gaji';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'pangkatjabatan', 'gapok', 'tmt_berkala', 'tmt_berkala_yad', 'no_sk', 'tgl_sk', 'masa_kerja', 'bulan_kerja', 'berkas'], 'required'],
            [['id', 'masa_kerja', 'bulan_kerja'], 'integer'],
            [['gapok'], 'number'],
            [['tmt_berkala', 'tmt_berkala_yad', 'tgl_sk'], 'safe'],
            [['pangkatjabatan'], 'string', 'max' => 50],
            [['no_sk'], 'string', 'max' => 25],
            [['berkas'], 'string', 'max' => 500],
            [['id', 'pangkatjabatan', 'gapok'], 'unique', 'targetAttribute' => ['id', 'pangkatjabatan', 'gapok']],
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
            'pangkatjabatan' => 'Pangkatjabatan',
            'gapok' => 'Gapok',
            'tmt_berkala' => 'Tmt Berkala',
            'tmt_berkala_yad' => 'Tmt Berkala Yad',
            'no_sk' => 'No Sk',
            'tgl_sk' => 'Tgl Sk',
            'masa_kerja' => 'Masa Kerja',
            'bulan_kerja' => 'Bulan Kerja',
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
