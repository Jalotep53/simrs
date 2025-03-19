<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "perpustakaan_ebook".
 *
 * @property string $kode_ebook
 * @property string|null $judul_ebook
 * @property string|null $jml_halaman
 * @property string|null $kode_penerbit
 * @property string|null $kode_pengarang
 * @property string|null $thn_terbit
 * @property string|null $id_kategori
 * @property string|null $id_jenis
 * @property string $berkas
 *
 * @property PerpustakaanJenisBuku $jenis
 * @property PerpustakaanKategori $kategori
 * @property PerpustakaanPenerbit $kodePenerbit
 * @property PerpustakaanPengarang $kodePengarang
 */
class PerpustakaanEbook extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'perpustakaan_ebook';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['kode_ebook', 'berkas'], 'required'],
            [['thn_terbit'], 'safe'],
            [['kode_ebook', 'kode_penerbit'], 'string', 'max' => 10],
            [['judul_ebook'], 'string', 'max' => 200],
            [['jml_halaman', 'id_kategori', 'id_jenis'], 'string', 'max' => 5],
            [['kode_pengarang'], 'string', 'max' => 7],
            [['berkas'], 'string', 'max' => 1000],
            [['kode_ebook'], 'unique'],
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
            'kode_ebook' => 'Kode Ebook',
            'judul_ebook' => 'Judul Ebook',
            'jml_halaman' => 'Jml Halaman',
            'kode_penerbit' => 'Kode Penerbit',
            'kode_pengarang' => 'Kode Pengarang',
            'thn_terbit' => 'Thn Terbit',
            'id_kategori' => 'Id Kategori',
            'id_jenis' => 'Id Jenis',
            'berkas' => 'Berkas',
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
}
