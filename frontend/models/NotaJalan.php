<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "nota_jalan".
 *
 * @property string $no_rawat
 * @property string|null $no_nota
 * @property string|null $tanggal
 * @property string|null $jam
 *
 * @property RegPeriksa $noRawat
 */
class NotaJalan extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'nota_jalan';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['no_rawat'], 'required'],
            [['tanggal', 'jam'], 'safe'],
            [['no_rawat', 'no_nota'], 'string', 'max' => 17],
            [['no_nota'], 'unique'],
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
            'no_nota' => 'No Nota',
            'tanggal' => 'Tanggal',
            'jam' => 'Jam',
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
