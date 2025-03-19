<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "inventaris_peminjaman".
 *
 * @property string $peminjam
 * @property string $tlp
 * @property string $no_inventaris
 * @property string $tgl_pinjam
 * @property string|null $tgl_kembali
 * @property string $nip
 * @property string|null $status_pinjam
 *
 * @property Petugas $nip0
 * @property Inventaris $noInventaris
 */
class InventarisPeminjaman extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'inventaris_peminjaman';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['peminjam', 'tlp', 'no_inventaris', 'tgl_pinjam', 'nip'], 'required'],
            [['tgl_pinjam', 'tgl_kembali'], 'safe'],
            [['status_pinjam'], 'string'],
            [['peminjam'], 'string', 'max' => 50],
            [['tlp'], 'string', 'max' => 13],
            [['no_inventaris'], 'string', 'max' => 30],
            [['nip'], 'string', 'max' => 20],
            [['peminjam', 'no_inventaris', 'tgl_pinjam', 'nip'], 'unique', 'targetAttribute' => ['peminjam', 'no_inventaris', 'tgl_pinjam', 'nip']],
            [['no_inventaris'], 'exist', 'skipOnError' => true, 'targetClass' => Inventaris::class, 'targetAttribute' => ['no_inventaris' => 'no_inventaris']],
            [['nip'], 'exist', 'skipOnError' => true, 'targetClass' => Petugas::class, 'targetAttribute' => ['nip' => 'nip']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'peminjam' => 'Peminjam',
            'tlp' => 'Tlp',
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
     * Gets query for [[NoInventaris]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getNoInventaris()
    {
        return $this->hasOne(Inventaris::class, ['no_inventaris' => 'no_inventaris']);
    }
}
