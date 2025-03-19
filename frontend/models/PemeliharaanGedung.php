<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "pemeliharaan_gedung".
 *
 * @property string $no_pemeliharaan
 * @property string $tanggal
 * @property string $uraian_kegiatan
 * @property string $nip
 * @property string $pelaksana
 * @property float $biaya
 * @property string $jenis_pemeliharaan
 * @property string $tindak_lanjut
 *
 * @property Petugas $nip0
 */
class PemeliharaanGedung extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'pemeliharaan_gedung';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['no_pemeliharaan', 'tanggal', 'uraian_kegiatan', 'nip', 'pelaksana', 'biaya', 'jenis_pemeliharaan', 'tindak_lanjut'], 'required'],
            [['tanggal'], 'safe'],
            [['pelaksana', 'jenis_pemeliharaan'], 'string'],
            [['biaya'], 'number'],
            [['no_pemeliharaan', 'nip'], 'string', 'max' => 20],
            [['uraian_kegiatan'], 'string', 'max' => 255],
            [['tindak_lanjut'], 'string', 'max' => 100],
            [['no_pemeliharaan'], 'unique'],
            [['nip'], 'exist', 'skipOnError' => true, 'targetClass' => Petugas::class, 'targetAttribute' => ['nip' => 'nip']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'no_pemeliharaan' => 'No Pemeliharaan',
            'tanggal' => 'Tanggal',
            'uraian_kegiatan' => 'Uraian Kegiatan',
            'nip' => 'Nip',
            'pelaksana' => 'Pelaksana',
            'biaya' => 'Biaya',
            'jenis_pemeliharaan' => 'Jenis Pemeliharaan',
            'tindak_lanjut' => 'Tindak Lanjut',
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
}
