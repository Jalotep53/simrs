<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "inhealth_maping_dokter".
 *
 * @property string $kd_dokter
 * @property string|null $kd_inhealth
 *
 * @property Dokter $kdDokter
 */
class InhealthMapingDokter extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'inhealth_maping_dokter';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['kd_dokter'], 'required'],
            [['kd_dokter', 'kd_inhealth'], 'string', 'max' => 20],
            [['kd_dokter'], 'unique'],
            [['kd_dokter'], 'exist', 'skipOnError' => true, 'targetClass' => Dokter::class, 'targetAttribute' => ['kd_dokter' => 'kd_dokter']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'kd_dokter' => 'Kd Dokter',
            'kd_inhealth' => 'Kd Inhealth',
        ];
    }

    /**
     * Gets query for [[KdDokter]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getKdDokter()
    {
        return $this->hasOne(Dokter::class, ['kd_dokter' => 'kd_dokter']);
    }
}
