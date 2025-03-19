<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "mutasi_berkas".
 *
 * @property string $no_rawat
 * @property string|null $status
 * @property string|null $dikirim
 * @property string|null $diterima
 * @property string|null $kembali
 * @property string|null $tidakada
 * @property string $ranap
 *
 * @property RegPeriksa $noRawat
 */
class MutasiBerkas extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'mutasi_berkas';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['no_rawat', 'ranap'], 'required'],
            [['status'], 'string'],
            [['dikirim', 'diterima', 'kembali', 'tidakada', 'ranap'], 'safe'],
            [['no_rawat'], 'string', 'max' => 17],
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
            'status' => 'Status',
            'dikirim' => 'Dikirim',
            'diterima' => 'Diterima',
            'kembali' => 'Kembali',
            'tidakada' => 'Tidakada',
            'ranap' => 'Ranap',
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
