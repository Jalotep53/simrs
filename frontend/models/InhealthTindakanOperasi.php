<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "inhealth_tindakan_operasi".
 *
 * @property string $kode_paket
 * @property string|null $kd_inhealth
 *
 * @property PaketOperasi $kodePaket
 */
class InhealthTindakanOperasi extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'inhealth_tindakan_operasi';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['kode_paket'], 'required'],
            [['kode_paket'], 'string', 'max' => 15],
            [['kd_inhealth'], 'string', 'max' => 20],
            [['kode_paket'], 'unique'],
            [['kode_paket'], 'exist', 'skipOnError' => true, 'targetClass' => PaketOperasi::class, 'targetAttribute' => ['kode_paket' => 'kode_paket']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'kode_paket' => 'Kode Paket',
            'kd_inhealth' => 'Kd Inhealth',
        ];
    }

    /**
     * Gets query for [[KodePaket]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getKodePaket()
    {
        return $this->hasOne(PaketOperasi::class, ['kode_paket' => 'kode_paket']);
    }
}
