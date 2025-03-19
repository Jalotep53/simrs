<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "inhealth_tindakan_ralan".
 *
 * @property string $kd_jenis_prw
 * @property string|null $kd_inhealth
 *
 * @property JnsPerawatan $kdJenisPrw
 */
class InhealthTindakanRalan extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'inhealth_tindakan_ralan';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['kd_jenis_prw'], 'required'],
            [['kd_jenis_prw'], 'string', 'max' => 15],
            [['kd_inhealth'], 'string', 'max' => 20],
            [['kd_jenis_prw'], 'unique'],
            [['kd_jenis_prw'], 'exist', 'skipOnError' => true, 'targetClass' => JnsPerawatan::class, 'targetAttribute' => ['kd_jenis_prw' => 'kd_jenis_prw']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'kd_jenis_prw' => 'Kd Jenis Prw',
            'kd_inhealth' => 'Kd Inhealth',
        ];
    }

    /**
     * Gets query for [[KdJenisPrw]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getKdJenisPrw()
    {
        return $this->hasOne(JnsPerawatan::class, ['kd_jenis_prw' => 'kd_jenis_prw']);
    }
}
