<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "satu_sehat_mapping_obat".
 *
 * @property string $kode_brng
 * @property string|null $obat_code
 * @property string $obat_system
 * @property string|null $obat_display
 * @property string|null $form_code
 * @property string|null $form_system
 * @property string|null $form_display
 * @property string|null $numerator_code
 * @property string|null $numerator_system
 * @property string|null $denominator_code
 * @property string|null $denominator_system
 * @property string|null $route_code
 * @property string|null $route_system
 * @property string|null $route_display
 *
 * @property Databarang $kodeBrng
 */
class SatuSehatMappingObat extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'satu_sehat_mapping_obat';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['kode_brng', 'obat_system'], 'required'],
            [['kode_brng', 'obat_code', 'numerator_code', 'denominator_code'], 'string', 'max' => 15],
            [['obat_system', 'form_system', 'route_system'], 'string', 'max' => 100],
            [['obat_display', 'form_display', 'numerator_system', 'denominator_system', 'route_display'], 'string', 'max' => 80],
            [['form_code', 'route_code'], 'string', 'max' => 30],
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
            'obat_code' => 'Obat Code',
            'obat_system' => 'Obat System',
            'obat_display' => 'Obat Display',
            'form_code' => 'Form Code',
            'form_system' => 'Form System',
            'form_display' => 'Form Display',
            'numerator_code' => 'Numerator Code',
            'numerator_system' => 'Numerator System',
            'denominator_code' => 'Denominator Code',
            'denominator_system' => 'Denominator System',
            'route_code' => 'Route Code',
            'route_system' => 'Route System',
            'route_display' => 'Route Display',
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
