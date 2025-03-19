<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "perpustakaan_anggota".
 *
 * @property string $no_anggota
 * @property string|null $nama_anggota
 * @property string|null $tmp_lahir
 * @property string|null $tgl_lahir
 * @property string|null $j_kel
 * @property string|null $alamat
 * @property string|null $no_telp
 * @property string|null $email
 * @property string|null $tgl_gabung
 * @property string|null $masa_berlaku
 * @property string $jenis_anggota
 * @property string $nomer_id
 *
 * @property PerpustakaanBayarDendaHarian[] $perpustakaanBayarDendaHarians
 * @property PerpustakaanBayarDenda[] $perpustakaanBayarDendas
 * @property PerpustakaanPeminjaman[] $perpustakaanPeminjamen
 */
class PerpustakaanAnggota extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'perpustakaan_anggota';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['no_anggota', 'jenis_anggota', 'nomer_id'], 'required'],
            [['tgl_lahir', 'tgl_gabung', 'masa_berlaku'], 'safe'],
            [['j_kel', 'jenis_anggota'], 'string'],
            [['no_anggota'], 'string', 'max' => 10],
            [['nama_anggota'], 'string', 'max' => 40],
            [['tmp_lahir', 'nomer_id'], 'string', 'max' => 20],
            [['alamat'], 'string', 'max' => 70],
            [['no_telp'], 'string', 'max' => 13],
            [['email'], 'string', 'max' => 25],
            [['no_anggota'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'no_anggota' => 'No Anggota',
            'nama_anggota' => 'Nama Anggota',
            'tmp_lahir' => 'Tmp Lahir',
            'tgl_lahir' => 'Tgl Lahir',
            'j_kel' => 'J Kel',
            'alamat' => 'Alamat',
            'no_telp' => 'No Telp',
            'email' => 'Email',
            'tgl_gabung' => 'Tgl Gabung',
            'masa_berlaku' => 'Masa Berlaku',
            'jenis_anggota' => 'Jenis Anggota',
            'nomer_id' => 'Nomer ID',
        ];
    }

    /**
     * Gets query for [[PerpustakaanBayarDendaHarians]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getPerpustakaanBayarDendaHarians()
    {
        return $this->hasMany(PerpustakaanBayarDendaHarian::class, ['no_anggota' => 'no_anggota']);
    }

    /**
     * Gets query for [[PerpustakaanBayarDendas]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getPerpustakaanBayarDendas()
    {
        return $this->hasMany(PerpustakaanBayarDenda::class, ['no_anggota' => 'no_anggota']);
    }

    /**
     * Gets query for [[PerpustakaanPeminjamen]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getPerpustakaanPeminjamen()
    {
        return $this->hasMany(PerpustakaanPeminjaman::class, ['no_anggota' => 'no_anggota']);
    }
}
