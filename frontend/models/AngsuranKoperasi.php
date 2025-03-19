<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "angsuran_koperasi".
 *
 * @property int $id
 * @property string $tanggal_pinjam
 * @property string $tanggal_angsur
 * @property float $pokok
 * @property float $jasa
 *
 * @property Pegawai $id0
 */
class AngsuranKoperasi extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'angsuran_koperasi';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'tanggal_pinjam', 'tanggal_angsur', 'pokok', 'jasa'], 'required'],
            [['id'], 'integer'],
            [['tanggal_pinjam', 'tanggal_angsur'], 'safe'],
            [['pokok', 'jasa'], 'number'],
            [['id', 'tanggal_pinjam', 'tanggal_angsur'], 'unique', 'targetAttribute' => ['id', 'tanggal_pinjam', 'tanggal_angsur']],
            [['id'], 'exist', 'skipOnError' => true, 'targetClass' => Pegawai::class, 'targetAttribute' => ['id' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'tanggal_pinjam' => 'Tanggal Pinjam',
            'tanggal_angsur' => 'Tanggal Angsur',
            'pokok' => 'Pokok',
            'jasa' => 'Jasa',
        ];
    }

    /**
     * Gets query for [[Id0]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getId0()
    {
        return $this->hasOne(Pegawai::class, ['id' => 'id']);
    }
}
