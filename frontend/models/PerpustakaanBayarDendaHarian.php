<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "perpustakaan_bayar_denda_harian".
 *
 * @property string $tgl_denda
 * @property string $no_anggota
 * @property string $no_inventaris
 * @property int|null $keterlambatan
 * @property float|null $besar_denda
 *
 * @property PerpustakaanAnggota $noAnggota
 * @property PerpustakaanInventaris $noInventaris
 */
class PerpustakaanBayarDendaHarian extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'perpustakaan_bayar_denda_harian';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['tgl_denda', 'no_anggota', 'no_inventaris'], 'required'],
            [['tgl_denda'], 'safe'],
            [['keterlambatan'], 'integer'],
            [['besar_denda'], 'number'],
            [['no_anggota'], 'string', 'max' => 10],
            [['no_inventaris'], 'string', 'max' => 20],
            [['tgl_denda', 'no_anggota', 'no_inventaris'], 'unique', 'targetAttribute' => ['tgl_denda', 'no_anggota', 'no_inventaris']],
            [['no_anggota'], 'exist', 'skipOnError' => true, 'targetClass' => PerpustakaanAnggota::class, 'targetAttribute' => ['no_anggota' => 'no_anggota']],
            [['no_inventaris'], 'exist', 'skipOnError' => true, 'targetClass' => PerpustakaanInventaris::class, 'targetAttribute' => ['no_inventaris' => 'no_inventaris']],
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
            'keterlambatan' => 'Keterlambatan',
            'besar_denda' => 'Besar Denda',
        ];
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
