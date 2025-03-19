<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "inventaris_barang".
 *
 * @property string $kode_barang
 * @property string|null $nama_barang
 * @property int|null $jml_barang
 * @property string|null $kode_produsen
 * @property string|null $id_merk
 * @property string|null $thn_produksi
 * @property string|null $isbn
 * @property string|null $id_kategori
 * @property string|null $id_jenis
 *
 * @property Inventaris[] $inventaris
 * @property InventarisDetailBeli[] $inventarisDetailBelis
 * @property InventarisDetailHibah[] $inventarisDetailHibahs
 * @property InventarisDetailPesan[] $inventarisDetailPesans
 * @property InventarisJenis $jenis
 * @property InventarisKategori $kategori
 * @property InventarisProdusen $kodeProdusen
 * @property InventarisMerk $merk
 * @property InventarisPembelian[] $noFakturs
 * @property InventarisHibah[] $noHibahs
 */
class InventarisBarang extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'inventaris_barang';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['kode_barang'], 'required'],
            [['jml_barang'], 'integer'],
            [['thn_produksi'], 'safe'],
            [['kode_barang', 'isbn'], 'string', 'max' => 20],
            [['nama_barang'], 'string', 'max' => 60],
            [['kode_produsen', 'id_merk', 'id_kategori', 'id_jenis'], 'string', 'max' => 10],
            [['kode_barang'], 'unique'],
            [['kode_produsen'], 'exist', 'skipOnError' => true, 'targetClass' => InventarisProdusen::class, 'targetAttribute' => ['kode_produsen' => 'kode_produsen']],
            [['id_merk'], 'exist', 'skipOnError' => true, 'targetClass' => InventarisMerk::class, 'targetAttribute' => ['id_merk' => 'id_merk']],
            [['id_kategori'], 'exist', 'skipOnError' => true, 'targetClass' => InventarisKategori::class, 'targetAttribute' => ['id_kategori' => 'id_kategori']],
            [['id_jenis'], 'exist', 'skipOnError' => true, 'targetClass' => InventarisJenis::class, 'targetAttribute' => ['id_jenis' => 'id_jenis']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'kode_barang' => 'Kode Barang',
            'nama_barang' => 'Nama Barang',
            'jml_barang' => 'Jml Barang',
            'kode_produsen' => 'Kode Produsen',
            'id_merk' => 'Id Merk',
            'thn_produksi' => 'Thn Produksi',
            'isbn' => 'Isbn',
            'id_kategori' => 'Id Kategori',
            'id_jenis' => 'Id Jenis',
        ];
    }

    /**
     * Gets query for [[Inventaris]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getInventaris()
    {
        return $this->hasMany(Inventaris::class, ['kode_barang' => 'kode_barang']);
    }

    /**
     * Gets query for [[InventarisDetailBelis]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getInventarisDetailBelis()
    {
        return $this->hasMany(InventarisDetailBeli::class, ['kode_barang' => 'kode_barang']);
    }

    /**
     * Gets query for [[InventarisDetailHibahs]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getInventarisDetailHibahs()
    {
        return $this->hasMany(InventarisDetailHibah::class, ['kode_barang' => 'kode_barang']);
    }

    /**
     * Gets query for [[InventarisDetailPesans]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getInventarisDetailPesans()
    {
        return $this->hasMany(InventarisDetailPesan::class, ['kode_barang' => 'kode_barang']);
    }

    /**
     * Gets query for [[Jenis]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getJenis()
    {
        return $this->hasOne(InventarisJenis::class, ['id_jenis' => 'id_jenis']);
    }

    /**
     * Gets query for [[Kategori]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getKategori()
    {
        return $this->hasOne(InventarisKategori::class, ['id_kategori' => 'id_kategori']);
    }

    /**
     * Gets query for [[KodeProdusen]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getKodeProdusen()
    {
        return $this->hasOne(InventarisProdusen::class, ['kode_produsen' => 'kode_produsen']);
    }

    /**
     * Gets query for [[Merk]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getMerk()
    {
        return $this->hasOne(InventarisMerk::class, ['id_merk' => 'id_merk']);
    }

    /**
     * Gets query for [[NoFakturs]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getNoFakturs()
    {
        return $this->hasMany(InventarisPembelian::class, ['no_faktur' => 'no_faktur'])->viaTable('inventaris_detail_beli', ['kode_barang' => 'kode_barang']);
    }

    /**
     * Gets query for [[NoHibahs]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getNoHibahs()
    {
        return $this->hasMany(InventarisHibah::class, ['no_hibah' => 'no_hibah'])->viaTable('inventaris_detail_hibah', ['kode_barang' => 'kode_barang']);
    }
}
