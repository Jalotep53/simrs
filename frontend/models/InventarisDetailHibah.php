<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "inventaris_detail_hibah".
 *
 * @property string $no_hibah
 * @property string $kode_barang
 * @property float|null $jumlah
 * @property float|null $h_hibah
 * @property float|null $subtotalhibah
 *
 * @property InventarisBarang $kodeBarang
 * @property InventarisHibah $noHibah
 */
class InventarisDetailHibah extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'inventaris_detail_hibah';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['no_hibah', 'kode_barang'], 'required'],
            [['jumlah', 'h_hibah', 'subtotalhibah'], 'number'],
            [['no_hibah', 'kode_barang'], 'string', 'max' => 20],
            [['no_hibah', 'kode_barang'], 'unique', 'targetAttribute' => ['no_hibah', 'kode_barang']],
            [['kode_barang'], 'exist', 'skipOnError' => true, 'targetClass' => InventarisBarang::class, 'targetAttribute' => ['kode_barang' => 'kode_barang']],
            [['no_hibah'], 'exist', 'skipOnError' => true, 'targetClass' => InventarisHibah::class, 'targetAttribute' => ['no_hibah' => 'no_hibah']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'no_hibah' => 'No Hibah',
            'kode_barang' => 'Kode Barang',
            'jumlah' => 'Jumlah',
            'h_hibah' => 'H Hibah',
            'subtotalhibah' => 'Subtotalhibah',
        ];
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
     * Gets query for [[NoHibah]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getNoHibah()
    {
        return $this->hasOne(InventarisHibah::class, ['no_hibah' => 'no_hibah']);
    }
}
