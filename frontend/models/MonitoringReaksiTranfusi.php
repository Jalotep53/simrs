<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "monitoring_reaksi_tranfusi".
 *
 * @property string $no_rawat
 * @property string $tgl_perawatan
 * @property string $jam_rawat
 * @property string|null $produk_darah
 * @property string|null $no_kantong
 * @property string $lokasi_insersi
 * @property string $td
 * @property string|null $hr
 * @property string|null $rr
 * @property string|null $suhu
 * @property string|null $jenis_reaksi_alergi
 * @property string|null $keterangan
 * @property string $nip
 *
 * @property Petugas $nip0
 * @property RegPeriksa $noRawat
 */
class MonitoringReaksiTranfusi extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'monitoring_reaksi_tranfusi';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['no_rawat', 'tgl_perawatan', 'jam_rawat', 'lokasi_insersi', 'td', 'nip'], 'required'],
            [['tgl_perawatan', 'jam_rawat'], 'safe'],
            [['no_rawat'], 'string', 'max' => 17],
            [['produk_darah', 'lokasi_insersi'], 'string', 'max' => 40],
            [['no_kantong', 'nip'], 'string', 'max' => 20],
            [['td'], 'string', 'max' => 8],
            [['hr', 'rr', 'suhu'], 'string', 'max' => 5],
            [['jenis_reaksi_alergi', 'keterangan'], 'string', 'max' => 70],
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
            'produk_darah' => 'Produk Darah',
            'no_kantong' => 'No Kantong',
            'lokasi_insersi' => 'Lokasi Insersi',
            'td' => 'Td',
            'hr' => 'Hr',
            'rr' => 'Rr',
            'suhu' => 'Suhu',
            'jenis_reaksi_alergi' => 'Jenis Reaksi Alergi',
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
