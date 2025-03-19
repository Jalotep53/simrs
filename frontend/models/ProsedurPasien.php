<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "prosedur_pasien".
 *
 * @property string $no_rawat
 * @property string $kode
 * @property string $status
 * @property int $prioritas
 *
 * @property Icd9 $kode0
 * @property RegPeriksa $noRawat
 */
class ProsedurPasien extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'prosedur_pasien';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['no_rawat', 'kode', 'status', 'prioritas'], 'required'],
            [['status'], 'string'],
            [['prioritas'], 'integer'],
            [['no_rawat'], 'string', 'max' => 17],
            [['kode'], 'string', 'max' => 8],
            [['no_rawat', 'kode', 'status'], 'unique', 'targetAttribute' => ['no_rawat', 'kode', 'status']],
            [['no_rawat'], 'exist', 'skipOnError' => true, 'targetClass' => RegPeriksa::class, 'targetAttribute' => ['no_rawat' => 'no_rawat']],
            [['kode'], 'exist', 'skipOnError' => true, 'targetClass' => Icd9::class, 'targetAttribute' => ['kode' => 'kode']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'no_rawat' => 'No Rawat',
            'kode' => 'Kode',
            'status' => 'Status',
            'prioritas' => 'Prioritas',
        ];
    }

    /**
     * Gets query for [[Kode0]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getKode0()
    {
        return $this->hasOne(Icd9::class, ['kode' => 'kode']);
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
