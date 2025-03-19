<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "akun_aset_inventaris".
 *
 * @property string|null $kd_rek
 * @property string $id_jenis
 *
 * @property InventarisJenis $jenis
 * @property Rekening $kdRek
 */
class AkunAsetInventaris extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'akun_aset_inventaris';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_jenis'], 'required'],
            [['kd_rek'], 'string', 'max' => 15],
            [['id_jenis'], 'string', 'max' => 10],
            [['id_jenis'], 'unique'],
            [['kd_rek'], 'exist', 'skipOnError' => true, 'targetClass' => Rekening::class, 'targetAttribute' => ['kd_rek' => 'kd_rek']],
            [['id_jenis'], 'exist', 'skipOnError' => true, 'targetClass' => InventarisJenis::class, 'targetAttribute' => ['id_jenis' => 'id_jenis']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'kd_rek' => 'Kd Rek',
            'id_jenis' => 'Id Jenis',
        ];
    }

    /**
     * Gets query for [[Jenis]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getJenis()
    {
        return $this->hasOne(InventarisJenis::class, ['id_jenis' => 'id_jenis']);
    }

    /**
     * Gets query for [[KdRek]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getKdRek()
    {
        return $this->hasOne(Rekening::class, ['kd_rek' => 'kd_rek']);
    }
}
