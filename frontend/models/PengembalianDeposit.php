<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "pengembalian_deposit".
 *
 * @property string $no_rawat
 * @property string $tanggal
 * @property string|null $petugas
 * @property float|null $besar_pengembalian
 *
 * @property RegPeriksa $noRawat
 */
class PengembalianDeposit extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'pengembalian_deposit';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['no_rawat', 'tanggal'], 'required'],
            [['tanggal'], 'safe'],
            [['besar_pengembalian'], 'number'],
            [['no_rawat'], 'string', 'max' => 17],
            [['petugas'], 'string', 'max' => 20],
            [['no_rawat'], 'unique'],
            [['no_rawat'], 'exist', 'skipOnError' => true, 'targetClass' => RegPeriksa::class, 'targetAttribute' => ['no_rawat' => 'no_rawat']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'no_rawat' => 'No Rawat',
            'tanggal' => 'Tanggal',
            'petugas' => 'Petugas',
            'besar_pengembalian' => 'Besar Pengembalian',
        ];
    }

    /**
     * Gets query for [[NoRawat]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getNoRawat()
    {
        return $this->hasOne(RegPeriksa::class, ['no_rawat' => 'no_rawat']);
    }
}
