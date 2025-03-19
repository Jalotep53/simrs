<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "perpustakaan_inventaris".
 *
 * @property string $no_inventaris
 * @property string|null $kode_buku
 * @property string|null $asal_buku
 * @property string|null $tgl_pengadaan
 * @property float|null $harga
 * @property string|null $status_buku
 * @property string|null $kd_ruang
 * @property string|null $no_rak
 * @property string|null $no_box
 *
 * @property PerpustakaanRuang $kdRuang
 * @property PerpustakaanBuku $kodeBuku
 * @property PerpustakaanBayarDendaHarian[] $perpustakaanBayarDendaHarians
 * @property PerpustakaanBayarDenda[] $perpustakaanBayarDendas
 * @property PerpustakaanPeminjaman[] $perpustakaanPeminjamen
 */
class PerpustakaanInventaris extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'perpustakaan_inventaris';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['no_inventaris'], 'required'],
            [['asal_buku', 'status_buku'], 'string'],
            [['tgl_pengadaan'], 'safe'],
            [['harga'], 'number'],
            [['no_inventaris'], 'string', 'max' => 20],
            [['kode_buku'], 'string', 'max' => 10],
            [['kd_ruang'], 'string', 'max' => 5],
            [['no_rak', 'no_box'], 'string', 'max' => 3],
            [['no_inventaris'], 'unique'],
            [['kode_buku'], 'exist', 'skipOnError' => true, 'targetClass' => PerpustakaanBuku::class, 'targetAttribute' => ['kode_buku' => 'kode_buku']],
            [['kd_ruang'], 'exist', 'skipOnError' => true, 'targetClass' => PerpustakaanRuang::class, 'targetAttribute' => ['kd_ruang' => 'kd_ruang']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'no_inventaris' => 'No Inventaris',
            'kode_buku' => 'Kode Buku',
            'asal_buku' => 'Asal Buku',
            'tgl_pengadaan' => 'Tgl Pengadaan',
            'harga' => 'Harga',
            'status_buku' => 'Status Buku',
            'kd_ruang' => 'Kd Ruang',
            'no_rak' => 'No Rak',
            'no_box' => 'No Box',
        ];
    }

    /**
     * Gets query for [[KdRuang]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getKdRuang()
    {
        return $this->hasOne(PerpustakaanRuang::class, ['kd_ruang' => 'kd_ruang']);
    }

    /**
     * Gets query for [[KodeBuku]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getKodeBuku()
    {
        return $this->hasOne(PerpustakaanBuku::class, ['kode_buku' => 'kode_buku']);
    }

    /**
     * Gets query for [[PerpustakaanBayarDendaHarians]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getPerpustakaanBayarDendaHarians()
    {
        return $this->hasMany(PerpustakaanBayarDendaHarian::class, ['no_inventaris' => 'no_inventaris']);
    }

    /**
     * Gets query for [[PerpustakaanBayarDendas]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getPerpustakaanBayarDendas()
    {
        return $this->hasMany(PerpustakaanBayarDenda::class, ['no_inventaris' => 'no_inventaris']);
    }

    /**
     * Gets query for [[PerpustakaanPeminjamen]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getPerpustakaanPeminjamen()
    {
        return $this->hasMany(PerpustakaanPeminjaman::class, ['no_inventaris' => 'no_inventaris']);
    }
}
