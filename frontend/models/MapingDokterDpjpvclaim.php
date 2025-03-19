<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "maping_dokter_dpjpvclaim".
 *
 * @property string $kd_dokter
 * @property string|null $kd_dokter_bpjs
 * @property string|null $nm_dokter_bpjs
 *
 * @property Dokter $kdDokter
 */
class MapingDokterDpjpvclaim extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'maping_dokter_dpjpvclaim';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['kd_dokter'], 'required'],
            [['kd_dokter', 'kd_dokter_bpjs'], 'string', 'max' => 20],
            [['nm_dokter_bpjs'], 'string', 'max' => 50],
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
            'kd_dokter_bpjs' => 'Kd Dokter Bpjs',
            'nm_dokter_bpjs' => 'Nm Dokter Bpjs',
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
