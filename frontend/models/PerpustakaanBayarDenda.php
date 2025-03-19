<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "perpustakaan_bayar_denda".
 *
 * @property string $tgl_denda
 * @property string $no_anggota
 * @property string $no_inventaris
 * @property string $kode_denda
 * @property float|null $besar_denda
 * @property string|null $keterangan_denda
 *
 * @property PerpustakaanDenda $kodeDenda
 * @property PerpustakaanAnggota $noAnggota
 * @property PerpustakaanInventaris $noInventaris
 */
class PerpustakaanBayarDenda extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'perpustakaan_bayar_denda';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['tgl_denda', 'no_anggota', 'no_inventaris', 'kode_denda'], 'required'],
            [['tgl_denda'], 'safe'],
            [['besar_denda'], 'number'],
            [['no_anggota'], 'string', 'max' => 10],
            [['no_inventaris'], 'string', 'max' => 20],
            [['kode_denda'], 'string', 'max' => 5],
            [['keterangan_denda'], 'string', 'max' => 50],
            [['tgl_denda', 'no_anggota', 'no_inventaris', 'kode_denda'], 'unique', 'targetAttribute' => ['tgl_denda', 'no_anggota', 'no_inventaris', 'kode_denda']],
            [['no_anggota'], 'exist', 'skipOnError' => true, 'targetClass' => PerpustakaanAnggota::class, 'targetAttribute' => ['no_anggota' => 'no_anggota']],
            [['no_inventaris'], 'exist', 'skipOnError' => true, 'targetClass' => PerpustakaanInventaris::class, 'targetAttribute' => ['no_inventaris' => 'no_inventaris']],
            [['kode_denda'], 'exist', 'skipOnError' => true, 'targetClass' => PerpustakaanDenda::class, 'targetAttribute' => ['kode_denda' => 'kode_denda']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'tgl_denda' => 'Tgl Denda',
            'no_anggota' => 'No Anggota',
            'no_inventaris' => 'No Inventaris',
            'kode_denda' => 'Kode Denda',
            'besar_denda' => 'Besar Denda',
            'keterangan_denda' => 'Keterangan Denda',
        ];
    }

    /**
     * Gets query for [[KodeDenda]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getKodeDenda()
    {
        return $this->hasOne(PerpustakaanDenda::class, ['kode_denda' => 'kode_denda']);
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
