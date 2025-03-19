<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "catatan_observasi_ranap".
 *
 * @property string $no_rawat
 * @property string $tgl_perawatan
 * @property string $jam_rawat
 * @property string|null $gcs
 * @property string $td
 * @property string|null $hr
 * @property string|null $rr
 * @property string|null $suhu
 * @property string $spo2
 * @property string $nip
 *
 * @property Petugas $nip0
 * @property RegPeriksa $noRawat
 */
class CatatanObservasiRanap extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'catatan_observasi_ranap';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['no_rawat', 'tgl_perawatan', 'jam_rawat', 'td', 'spo2', 'nip'], 'required'],
            [['tgl_perawatan', 'jam_rawat'], 'safe'],
            [['no_rawat'], 'string', 'max' => 17],
            [['gcs'], 'string', 'max' => 10],
            [['td'], 'string', 'max' => 8],
            [['hr', 'rr', 'suhu'], 'string', 'max' => 5],
            [['spo2'], 'string', 'max' => 3],
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
            'gcs' => 'Gcs',
            'td' => 'Td',
            'hr' => 'Hr',
            'rr' => 'Rr',
            'suhu' => 'Suhu',
            'spo2' => 'Spo2',
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
