<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "obat_penyakit".
 *
 * @property string $kd_penyakit
 * @property string $kode_brng
 * @property string|null $referensi
 *
 * @property Penyakit $kdPenyakit
 * @property Databarang $kodeBrng
 */
class ObatPenyakit extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'obat_penyakit';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['kd_penyakit', 'kode_brng'], 'required'],
            [['kd_penyakit', 'kode_brng'], 'string', 'max' => 15],
            [['referensi'], 'string', 'max' => 60],
            [['kd_penyakit', 'kode_brng'], 'unique', 'targetAttribute' => ['kd_penyakit', 'kode_brng']],
            [['kd_penyakit'], 'exist', 'skipOnError' => true, 'targetClass' => Penyakit::class, 'targetAttribute' => ['kd_penyakit' => 'kd_penyakit']],
            [['kode_brng'], 'exist', 'skipOnError' => true, 'targetClass' => Databarang::class, 'targetAttribute' => ['kode_brng' => 'kode_brng']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'kd_penyakit' => 'Kd Penyakit',
            'kode_brng' => 'Kode Brng',
            'referensi' => 'Referensi',
        ];
    }

    /**
     * Gets query for [[KdPenyakit]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getKdPenyakit()
    {
        return $this->hasOne(Penyakit::class, ['kd_penyakit' => 'kd_penyakit']);
    }

    /**
     * Gets query for [[KodeBrng]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getKodeBrng()
    {
        return $this->hasOne(Databarang::class, ['kode_brng' => 'kode_brng']);
    }
}
