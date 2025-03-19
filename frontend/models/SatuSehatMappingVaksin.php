<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "satu_sehat_mapping_vaksin".
 *
 * @property string $kode_brng
 * @property string|null $vaksin_code
 * @property string $vaksin_system
 * @property string|null $vaksin_display
 * @property string|null $route_code
 * @property string|null $route_system
 * @property string|null $route_display
 * @property string|null $dose_quantity_code
 * @property string|null $dose_quantity_system
 * @property string|null $dose_quantity_unit
 *
 * @property Databarang $kodeBrng
 */
class SatuSehatMappingVaksin extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'satu_sehat_mapping_vaksin';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['kode_brng', 'vaksin_system'], 'required'],
            [['kode_brng', 'vaksin_code', 'dose_quantity_code', 'dose_quantity_unit'], 'string', 'max' => 15],
            [['vaksin_system', 'route_system'], 'string', 'max' => 100],
            [['vaksin_display', 'route_display', 'dose_quantity_system'], 'string', 'max' => 80],
            [['route_code'], 'string', 'max' => 30],
            [['kode_brng'], 'unique'],
            [['kode_brng'], 'exist', 'skipOnError' => true, 'targetClass' => Databarang::class, 'targetAttribute' => ['kode_brng' => 'kode_brng']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'kode_brng' => 'Kode Brng',
            'vaksin_code' => 'Vaksin Code',
            'vaksin_system' => 'Vaksin System',
            'vaksin_display' => 'Vaksin Display',
            'route_code' => 'Route Code',
            'route_system' => 'Route System',
            'route_display' => 'Route Display',
            'dose_quantity_code' => 'Dose Quantity Code',
            'dose_quantity_system' => 'Dose Quantity System',
            'dose_quantity_unit' => 'Dose Quantity Unit',
        ];
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
