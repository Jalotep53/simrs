<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "catatan_infus_ralan".
 *
 * @property string $no_rawat
 * @property string $tgl_infus
 * @property string $jam_infus
 * @property string $nip
 * @property string $kolf
 * @property string $nm_cairan
 * @property string $obat
 * @property string $keterangan
 *
 * @property Petugas $nip0
 * @property RegPeriksa $noRawat
 */
class CatatanInfusRalan extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'catatan_infus_ralan';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['no_rawat', 'tgl_infus', 'jam_infus', 'nip', 'kolf', 'nm_cairan', 'obat', 'keterangan'], 'required'],
            [['tgl_infus', 'jam_infus'], 'safe'],
            [['no_rawat'], 'string', 'max' => 17],
            [['nip'], 'string', 'max' => 20],
            [['kolf'], 'string', 'max' => 10],
            [['nm_cairan', 'obat'], 'string', 'max' => 30],
            [['keterangan'], 'string', 'max' => 50],
            [['no_rawat'], 'exist', 'skipOnError' => true, 'targetClass' => RegPeriksa::class, 'targetAttribute' => ['no_rawat' => 'no_rawat']],
            [['nip'], 'exist', 'skipOnError' => true, 'targetClass' => Petugas::class, 'targetAttribute' => ['nip' => 'nip']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'no_rawat' => 'No Rawat',
            'tgl_infus' => 'Tgl Infus',
            'jam_infus' => 'Jam Infus',
            'nip' => 'Nip',
            'kolf' => 'Kolf',
            'nm_cairan' => 'Nm Cairan',
            'obat' => 'Obat',
            'keterangan' => 'Keterangan',
        ];
    }

    /**
     * Gets query for [[Nip0]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getNip0()
    {
        return $this->hasOne(Petugas::class, ['nip' => 'nip']);
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
