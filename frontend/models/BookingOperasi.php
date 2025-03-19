<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "booking_operasi".
 *
 * @property string $no_rawat
 * @property string $kode_paket
 * @property string $tanggal
 * @property string $jam_mulai
 * @property string|null $jam_selesai
 * @property string|null $status
 * @property string|null $kd_dokter
 * @property string $kd_ruang_ok
 *
 * @property Dokter $kdDokter
 * @property RuangOk $kdRuangOk
 * @property PaketOperasi $kodePaket
 * @property RegPeriksa $noRawat
 */
class BookingOperasi extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'booking_operasi';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['no_rawat', 'kode_paket', 'tanggal', 'jam_mulai', 'kd_ruang_ok'], 'required'],
            [['tanggal', 'jam_mulai', 'jam_selesai'], 'safe'],
            [['status'], 'string'],
            [['no_rawat'], 'string', 'max' => 17],
            [['kode_paket'], 'string', 'max' => 15],
            [['kd_dokter'], 'string', 'max' => 20],
            [['kd_ruang_ok'], 'string', 'max' => 3],
            [['no_rawat', 'kode_paket', 'tanggal', 'jam_mulai'], 'unique', 'targetAttribute' => ['no_rawat', 'kode_paket', 'tanggal', 'jam_mulai']],
            [['no_rawat'], 'exist', 'skipOnError' => true, 'targetClass' => RegPeriksa::class, 'targetAttribute' => ['no_rawat' => 'no_rawat']],
            [['kode_paket'], 'exist', 'skipOnError' => true, 'targetClass' => PaketOperasi::class, 'targetAttribute' => ['kode_paket' => 'kode_paket']],
            [['kd_dokter'], 'exist', 'skipOnError' => true, 'targetClass' => Dokter::class, 'targetAttribute' => ['kd_dokter' => 'kd_dokter']],
            [['kd_ruang_ok'], 'exist', 'skipOnError' => true, 'targetClass' => RuangOk::class, 'targetAttribute' => ['kd_ruang_ok' => 'kd_ruang_ok']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'no_rawat' => 'No Rawat',
            'kode_paket' => 'Kode Paket',
            'tanggal' => 'Tanggal',
            'jam_mulai' => 'Jam Mulai',
            'jam_selesai' => 'Jam Selesai',
            'status' => 'Status',
            'kd_dokter' => 'Kd Dokter',
            'kd_ruang_ok' => 'Kd Ruang Ok',
        ];
    }

    /**
     * Gets query for [[KdDokter]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getKdDokter()
    {
        return $this->hasOne(Dokter::class, ['kd_dokter' => 'kd_dokter']);
    }

    /**
     * Gets query for [[KdRuangOk]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getKdRuangOk()
    {
        return $this->hasOne(RuangOk::class, ['kd_ruang_ok' => 'kd_ruang_ok']);
    }

    /**
     * Gets query for [[KodePaket]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getKodePaket()
    {
        return $this->hasOne(PaketOperasi::class, ['kode_paket' => 'kode_paket']);
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
