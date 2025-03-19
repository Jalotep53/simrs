<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "perpustakaan_buku".
 *
 * @property string $kode_buku
 * @property string|null $judul_buku
 * @property string|null $jml_halaman
 * @property string|null $kode_penerbit
 * @property string|null $kode_pengarang
 * @property string|null $thn_terbit
 * @property string|null $isbn
 * @property string|null $id_kategori
 * @property string|null $id_jenis
 *
 * @property PerpustakaanJenisBuku $jenis
 * @property PerpustakaanKategori $kategori
 * @property PerpustakaanPenerbit $kodePenerbit
 * @property PerpustakaanPengarang $kodePengarang
 * @property PerpustakaanInventaris[] $perpustakaanInventaris
 */
class PerpustakaanBuku extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'perpustakaan_buku';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['kode_buku'], 'required'],
            [['thn_terbit'], 'safe'],
            [['kode_buku', 'kode_penerbit'], 'string', 'max' => 10],
            [['judul_buku'], 'string', 'max' => 200],
            [['jml_halaman', 'id_kategori', 'id_jenis'], 'string', 'max' => 5],
            [['kode_pengarang'], 'string', 'max' => 7],
            [['isbn'], 'string', 'max' => 20],
            [['kode_buku'], 'unique'],
            [['kode_penerbit'], 'exist', 'skipOnError' => true, 'targetClass' => PerpustakaanPenerbit::class, 'targetAttribute' => ['kode_penerbit' => 'kode_penerbit']],
            [['kode_pengarang'], 'exist', 'skipOnError' => true, 'targetClass' => PerpustakaanPengarang::class, 'targetAttribute' => ['kode_pengarang' => 'kode_pengarang']],
            [['id_kategori'], 'exist', 'skipOnError' => true, 'targetClass' => PerpustakaanKategori::class, 'targetAttribute' => ['id_kategori' => 'id_kategori']],
            [['id_jenis'], 'exist', 'skipOnError' => true, 'targetClass' => PerpustakaanJenisBuku::class, 'targetAttribute' => ['id_jenis' => 'id_jenis']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'kode_buku' => 'Kode Buku',
            'judul_buku' => 'Judul Buku',
            'jml_halaman' => 'Jml Halaman',
            'kode_penerbit' => 'Kode Penerbit',
            'kode_pengarang' => 'Kode Pengarang',
            'thn_terbit' => 'Thn Terbit',
            'isbn' => 'Isbn',
            'id_kategori' => 'Id Kategori',
            'id_jenis' => 'Id Jenis',
        ];
    }

    /**
     * Gets query for [[Jenis]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getJenis()
    {
        return $this->hasOne(PerpustakaanJenisBuku::class, ['id_jenis' => 'id_jenis']);
    }

    /**
     * Gets query for [[Kategori]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getKategori()
    {
        return $this->hasOne(PerpustakaanKategori::class, ['id_kategori' => 'id_kategori']);
    }

    /**
     * Gets query for [[KodePenerbit]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getKodePenerbit()
    {
        return $this->hasOne(PerpustakaanPenerbit::class, ['kode_penerbit' => 'kode_penerbit']);
    }

    /**
     * Gets query for [[KodePengarang]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getKodePengarang()
    {
        return $this->hasOne(PerpustakaanPengarang::class, ['kode_pengarang' => 'kode_pengarang']);
    }

    /**
     * Gets query for [[PerpustakaanInventaris]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getPerpustakaanInventaris()
    {
        return $this->hasMany(PerpustakaanInventaris::class, ['kode_buku' => 'kode_buku']);
    }
}
