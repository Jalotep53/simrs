<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "inventaris".
 *
 * @property string $no_inventaris
 * @property string|null $kode_barang
 * @property string|null $asal_barang
 * @property string|null $tgl_pengadaan
 * @property float|null $harga
 * @property string|null $status_barang
 * @property string|null $id_ruang
 * @property string|null $no_rak
 * @property string|null $no_box
 *
 * @property CssdBarang $cssdBarang
 * @property InventarisGambar $inventarisGambar
 * @property InventarisPeminjaman[] $inventarisPeminjamen
 * @property InventarisBarang $kodeBarang
 * @property PemeliharaanInventaris[] $pemeliharaanInventaris
 * @property PermintaanPerbaikanInventaris[] $permintaanPerbaikanInventaris
 * @property InventarisRuang $ruang
 */
class Inventaris extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'inventaris';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['no_inventaris'], 'required'],
            [['asal_barang', 'status_barang'], 'string'],
            [['tgl_pengadaan'], 'safe'],
            [['harga'], 'number'],
            [['no_inventaris'], 'string', 'max' => 30],
            [['kode_barang'], 'string', 'max' => 20],
            [['id_ruang'], 'string', 'max' => 5],
            [['no_rak', 'no_box'], 'string', 'max' => 3],
            [['no_inventaris'], 'unique'],
            [['kode_barang'], 'exist', 'skipOnError' => true, 'targetClass' => InventarisBarang::class, 'targetAttribute' => ['kode_barang' => 'kode_barang']],
            [['id_ruang'], 'exist', 'skipOnError' => true, 'targetClass' => InventarisRuang::class, 'targetAttribute' => ['id_ruang' => 'id_ruang']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'no_inventaris' => 'No Inventaris',
            'kode_barang' => 'Kode Barang',
            'asal_barang' => 'Asal Barang',
            'tgl_pengadaan' => 'Tgl Pengadaan',
            'harga' => 'Harga',
            'status_barang' => 'Status Barang',
            'id_ruang' => 'Id Ruang',
            'no_rak' => 'No Rak',
            'no_box' => 'No Box',
        ];
    }

    /**
     * Gets query for [[CssdBarang]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getCssdBarang()
    {
        return $this->hasOne(CssdBarang::class, ['no_inventaris' => 'no_inventaris']);
    }

    /**
     * Gets query for [[InventarisGambar]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getInventarisGambar()
    {
        return $this->hasOne(InventarisGambar::class, ['no_inventaris' => 'no_inventaris']);
    }

    /**
     * Gets query for [[InventarisPeminjamen]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getInventarisPeminjamen()
    {
        return $this->hasMany(InventarisPeminjaman::class, ['no_inventaris' => 'no_inventaris']);
    }

    /**
     * Gets query for [[KodeBarang]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getKodeBarang()
    {
        return $this->hasOne(InventarisBarang::class, ['kode_barang' => 'kode_barang']);
    }

    /**
     * Gets query for [[PemeliharaanInventaris]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getPemeliharaanInventaris()
    {
        return $this->hasMany(PemeliharaanInventaris::class, ['no_inventaris' => 'no_inventaris']);
    }

    /**
     * Gets query for [[PermintaanPerbaikanInventaris]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getPermintaanPerbaikanInventaris()
    {
        return $this->hasMany(PermintaanPerbaikanInventaris::class, ['no_inventaris' => 'no_inventaris']);
    }

    /**
     * Gets query for [[Ruang]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getRuang()
    {
        return $this->hasOne(InventarisRuang::class, ['id_ruang' => 'id_ruang']);
    }
}
