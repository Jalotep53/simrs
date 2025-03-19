<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "tokoreturbeli".
 *
 * @property string $no_retur_beli
 * @property string|null $tgl_retur
 * @property string|null $nip
 * @property string $kode_suplier
 * @property string $catatan
 * @property float $total
 *
 * @property Tokosuplier $kodeSuplier
 * @property Petugas $nip0
 * @property TokoDetailReturbeli[] $tokoDetailReturbelis
 */
class Tokoreturbeli extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'tokoreturbeli';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['no_retur_beli', 'kode_suplier', 'catatan', 'total'], 'required'],
            [['tgl_retur'], 'safe'],
            [['total'], 'number'],
            [['no_retur_beli'], 'string', 'max' => 15],
            [['nip'], 'string', 'max' => 20],
            [['kode_suplier'], 'string', 'max' => 5],
            [['catatan'], 'string', 'max' => 40],
            [['no_retur_beli'], 'unique'],
            [['kode_suplier'], 'exist', 'skipOnError' => true, 'targetClass' => Tokosuplier::class, 'targetAttribute' => ['kode_suplier' => 'kode_suplier']],
            [['nip'], 'exist', 'skipOnError' => true, 'targetClass' => Petugas::class, 'targetAttribute' => ['nip' => 'nip']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'no_retur_beli' => 'No Retur Beli',
            'tgl_retur' => 'Tgl Retur',
            'nip' => 'Nip',
            'kode_suplier' => 'Kode Suplier',
            'catatan' => 'Catatan',
            'total' => 'Total',
        ];
    }

    /**
     * Gets query for [[KodeSuplier]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getKodeSuplier()
    {
        return $this->hasOne(Tokosuplier::class, ['kode_suplier' => 'kode_suplier']);
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
     * Gets query for [[TokoDetailReturbelis]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getTokoDetailReturbelis()
    {
        return $this->hasMany(TokoDetailReturbeli::class, ['no_retur_beli' => 'no_retur_beli']);
    }
}
