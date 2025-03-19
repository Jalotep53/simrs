<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "catatan_keseimbangan_cairan".
 *
 * @property string $no_rawat
 * @property string $tgl_perawatan
 * @property string $jam_rawat
 * @property string|null $infus
 * @property string $tranfusi
 * @property string|null $minum
 * @property string|null $urine
 * @property string|null $drain
 * @property string $ngt
 * @property string $iwl
 * @property string $keseimbangan
 * @property string $keterangan
 * @property string $nip
 *
 * @property Petugas $nip0
 * @property RegPeriksa $noRawat
 */
class CatatanKeseimbanganCairan extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'catatan_keseimbangan_cairan';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['no_rawat', 'tgl_perawatan', 'jam_rawat', 'tranfusi', 'ngt', 'iwl', 'keseimbangan', 'keterangan', 'nip'], 'required'],
            [['tgl_perawatan', 'jam_rawat'], 'safe'],
            [['no_rawat'], 'string', 'max' => 17],
            [['infus', 'tranfusi', 'minum', 'urine', 'drain', 'ngt', 'iwl', 'keseimbangan'], 'string', 'max' => 4],
            [['keterangan'], 'string', 'max' => 200],
            [['nip'], 'string', 'max' => 20],
            [['no_rawat', 'tgl_perawatan', 'jam_rawat'], 'unique', 'targetAttribute' => ['no_rawat', 'tgl_perawatan', 'jam_rawat']],
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
            'tgl_perawatan' => 'Tgl Perawatan',
            'jam_rawat' => 'Jam Rawat',
            'infus' => 'Infus',
            'tranfusi' => 'Tranfusi',
            'minum' => 'Minum',
            'urine' => 'Urine',
            'drain' => 'Drain',
            'ngt' => 'Ngt',
            'iwl' => 'Iwl',
            'keseimbangan' => 'Keseimbangan',
            'keterangan' => 'Keterangan',
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
