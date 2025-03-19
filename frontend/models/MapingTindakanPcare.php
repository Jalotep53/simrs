<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "maping_tindakan_pcare".
 *
 * @property string $kd_jenis_prw
 * @property string|null $kd_tindakan_pcare
 * @property string|null $nm_tindakan_pcare
 *
 * @property JnsPerawatan $kdJenisPrw
 * @property PcareTindakanRalanDiberikan[] $pcareTindakanRalanDiberikans
 */
class MapingTindakanPcare extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'maping_tindakan_pcare';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['kd_jenis_prw'], 'required'],
            [['kd_jenis_prw', 'kd_tindakan_pcare'], 'string', 'max' => 15],
            [['nm_tindakan_pcare'], 'string', 'max' => 100],
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
            'kd_tindakan_pcare' => 'Kd Tindakan Pcare',
            'nm_tindakan_pcare' => 'Nm Tindakan Pcare',
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

    /**
     * Gets query for [[PcareTindakanRalanDiberikans]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getPcareTindakanRalanDiberikans()
    {
        return $this->hasMany(PcareTindakanRalanDiberikan::class, ['kd_jenis_prw' => 'kd_jenis_prw']);
    }
}
