<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "saran_kesan_lab".
 *
 * @property string $no_rawat
 * @property string $tgl_periksa
 * @property string $jam
 * @property string|null $saran
 * @property string|null $kesan
 *
 * @property RegPeriksa $noRawat
 */
class SaranKesanLab extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'saran_kesan_lab';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['no_rawat', 'tgl_periksa', 'jam'], 'required'],
            [['tgl_periksa', 'jam'], 'safe'],
            [['no_rawat'], 'string', 'max' => 17],
            [['saran', 'kesan'], 'string', 'max' => 700],
            [['no_rawat', 'tgl_periksa', 'jam'], 'unique', 'targetAttribute' => ['no_rawat', 'tgl_periksa', 'jam']],
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
            'tgl_periksa' => 'Tgl Periksa',
            'jam' => 'Jam',
            'saran' => 'Saran',
            'kesan' => 'Kesan',
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
