<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "satu_sehat_mapping_radiologi".
 *
 * @property string $kd_jenis_prw
 * @property string|null $code
 * @property string $system
 * @property string|null $display
 * @property string $sampel_code
 * @property string $sampel_system
 * @property string $sampel_display
 *
 * @property JnsPerawatanRadiologi $kdJenisPrw
 */
class SatuSehatMappingRadiologi extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'satu_sehat_mapping_radiologi';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['kd_jenis_prw', 'system', 'sampel_code', 'sampel_system', 'sampel_display'], 'required'],
            [['kd_jenis_prw', 'code', 'sampel_code'], 'string', 'max' => 15],
            [['system', 'sampel_system'], 'string', 'max' => 100],
            [['display', 'sampel_display'], 'string', 'max' => 80],
            [['kd_jenis_prw'], 'unique'],
            [['kd_jenis_prw'], 'exist', 'skipOnError' => true, 'targetClass' => JnsPerawatanRadiologi::class, 'targetAttribute' => ['kd_jenis_prw' => 'kd_jenis_prw']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'kd_jenis_prw' => 'Kd Jenis Prw',
            'code' => 'Code',
            'system' => 'System',
            'display' => 'Display',
            'sampel_code' => 'Sampel Code',
            'sampel_system' => 'Sampel System',
            'sampel_display' => 'Sampel Display',
        ];
    }

    /**
     * Gets query for [[KdJenisPrw]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getKdJenisPrw()
    {
        return $this->hasOne(JnsPerawatanRadiologi::class, ['kd_jenis_prw' => 'kd_jenis_prw']);
    }
}
