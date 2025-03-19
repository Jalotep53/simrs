<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "peminjampiutang".
 *
 * @property string $kode_peminjam
 * @property string|null $nama_peminjam
 * @property string|null $alamat
 * @property string|null $no_telp
 * @property string|null $kd_rek
 * @property string $status
 *
 * @property BayarPiutangLainlain[] $bayarPiutangLainlains
 * @property Rekening $kdRek
 * @property PiutangLainlain[] $piutangLainlains
 */
class Peminjampiutang extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'peminjampiutang';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['kode_peminjam', 'status'], 'required'],
            [['status'], 'string'],
            [['kode_peminjam'], 'string', 'max' => 5],
            [['nama_peminjam'], 'string', 'max' => 50],
            [['alamat'], 'string', 'max' => 150],
            [['no_telp'], 'string', 'max' => 13],
            [['kd_rek'], 'string', 'max' => 15],
            [['kode_peminjam'], 'unique'],
            [['kd_rek'], 'exist', 'skipOnError' => true, 'targetClass' => Rekening::class, 'targetAttribute' => ['kd_rek' => 'kd_rek']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'kode_peminjam' => 'Kode Peminjam',
            'nama_peminjam' => 'Nama Peminjam',
            'alamat' => 'Alamat',
            'no_telp' => 'No Telp',
            'kd_rek' => 'Kd Rek',
            'status' => 'Status',
        ];
    }

    /**
     * Gets query for [[BayarPiutangLainlains]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getBayarPiutangLainlains()
    {
        return $this->hasMany(BayarPiutangLainlain::class, ['kode_peminjam' => 'kode_peminjam']);
    }

    /**
     * Gets query for [[KdRek]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getKdRek()
    {
        return $this->hasOne(Rekening::class, ['kd_rek' => 'kd_rek']);
    }

    /**
     * Gets query for [[PiutangLainlains]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getPiutangLainlains()
    {
        return $this->hasMany(PiutangLainlain::class, ['kode_peminjam' => 'kode_peminjam']);
    }
}
