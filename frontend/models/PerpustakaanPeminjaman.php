<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "perpustakaan_peminjaman".
 *
 * @property string|null $no_anggota
 * @property string|null $no_inventaris
 * @property string|null $tgl_pinjam
 * @property string|null $tgl_kembali
 * @property string|null $nip
 * @property string|null $status_pinjam
 *
 * @property Petugas $nip0
 * @property PerpustakaanAnggota $noAnggota
 * @property PerpustakaanInventaris $noInventaris
 */
class PerpustakaanPeminjaman extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'perpustakaan_peminjaman';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['tgl_pinjam', 'tgl_kembali'], 'safe'],
            [['status_pinjam'], 'string'],
            [['no_anggota'], 'string', 'max' => 10],
            [['no_inventaris', 'nip'], 'string', 'max' => 20],
            [['no_anggota'], 'exist', 'skipOnError' => true, 'targetClass' => PerpustakaanAnggota::class, 'targetAttribute' => ['no_anggota' => 'no_anggota']],
            [['no_inventaris'], 'exist', 'skipOnError' => true, 'targetClass' => PerpustakaanInventaris::class, 'targetAttribute' => ['no_inventaris' => 'no_inventaris']],
            [['nip'], 'exist', 'skipOnError' => true, 'targetClass' => Petugas::class, 'targetAttribute' => ['nip' => 'nip']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'no_anggota' => 'No Anggota',
            'no_inventaris' => 'No Inventaris',
            'tgl_pinjam' => 'Tgl Pinjam',
            'tgl_kembali' => 'Tgl Kembali',
            'nip' => 'Nip',
            'status_pinjam' => 'Status Pinjam',
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
     * Gets query for [[NoAnggota]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getNoAnggota()
    {
        return $this->hasOne(PerpustakaanAnggota::class, ['no_anggota' => 'no_anggota']);
    }

    /**
     * Gets query for [[NoInventaris]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getNoInventaris()
    {
        return $this->hasOne(PerpustakaanInventaris::class, ['no_inventaris' => 'no_inventaris']);
    }
}
