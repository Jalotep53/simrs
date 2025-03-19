<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "data_HAIs".
 *
 * @property string $tanggal
 * @property string $no_rawat
 * @property int|null $ETT
 * @property int|null $CVL
 * @property int|null $IVL
 * @property int|null $UC
 * @property int|null $VAP
 * @property int|null $IAD
 * @property int|null $PLEB
 * @property int|null $ISK
 * @property int $ILO
 * @property int|null $HAP
 * @property int|null $Tinea
 * @property int|null $Scabies
 * @property string|null $DEKU
 * @property string|null $SPUTUM
 * @property string|null $DARAH
 * @property string|null $URINE
 * @property string|null $ANTIBIOTIK
 * @property string|null $kd_kamar
 */
class DataHAIs extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'data_HAIs';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['tanggal', 'no_rawat', 'ILO'], 'required'],
            [['tanggal'], 'safe'],
            [['ETT', 'CVL', 'IVL', 'UC', 'VAP', 'IAD', 'PLEB', 'ISK', 'ILO', 'HAP', 'Tinea', 'Scabies'], 'integer'],
            [['DEKU'], 'string'],
            [['no_rawat'], 'string', 'max' => 17],
            [['SPUTUM', 'DARAH', 'URINE', 'ANTIBIOTIK'], 'string', 'max' => 200],
            [['kd_kamar'], 'string', 'max' => 15],
            [['tanggal', 'no_rawat'], 'unique', 'targetAttribute' => ['tanggal', 'no_rawat']],
            [['no_rawat'], 'exist', 'skipOnError' => true, 'targetClass' => RegPeriksa::class, 'targetAttribute' => ['no_rawat' => 'no_rawat']],
            [['kd_kamar'], 'exist', 'skipOnError' => true, 'targetClass' => Kamar::class, 'targetAttribute' => ['kd_kamar' => 'kd_kamar']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'tanggal' => 'Tanggal',
            'no_rawat' => 'No Rawat',
            'ETT' => 'Ett',
            'CVL' => 'Cvl',
            'IVL' => 'Ivl',
            'UC' => 'Uc',
            'VAP' => 'Vap',
            'IAD' => 'Iad',
            'PLEB' => 'Pleb',
            'ISK' => 'Isk',
            'ILO' => 'Ilo',
            'HAP' => 'Hap',
            'Tinea' => 'Tinea',
            'Scabies' => 'Scabies',
            'DEKU' => 'Deku',
            'SPUTUM' => 'Sputum',
            'DARAH' => 'Darah',
            'URINE' => 'Urine',
            'ANTIBIOTIK' => 'Antibiotik',
            'kd_kamar' => 'Kd Kamar',
        ];
    }
}
