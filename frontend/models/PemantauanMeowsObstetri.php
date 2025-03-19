<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "pemantauan_meows_obstetri".
 *
 * @property string $no_rawat
 * @property string $tanggal
 * @property string|null $parameter_pernapasan
 * @property string|null $skor_pernapasan
 * @property string|null $parameter_saturasi
 * @property string|null $skor_saturasi
 * @property string|null $parameter_temperatur
 * @property string|null $skor_temperatur
 * @property string|null $parameter_tekanan_darah_sistole
 * @property string|null $skor_tekanan_darah_sistole
 * @property string|null $parameter_tekanan_darah_diastole
 * @property string|null $skor_tekanan_darah_diastole
 * @property string|null $parameter_denyut_jantung
 * @property string|null $skor_denyut_jantung
 * @property string|null $parameter_kesadaran
 * @property string|null $skor_kesadaran
 * @property string|null $parameter_ketuban
 * @property string|null $skor_ketuban
 * @property string|null $parameter_discharge
 * @property string|null $skor_discharge
 * @property string|null $parameter_proteinuria
 * @property string|null $skor_proteinuria
 * @property string $skor_total
 * @property string|null $parameter_total
 * @property string $code_blue
 * @property string|null $nip
 *
 * @property Petugas $nip0
 * @property RegPeriksa $noRawat
 */
class PemantauanMeowsObstetri extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'pemantauan_meows_obstetri';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['no_rawat', 'tanggal', 'skor_total', 'code_blue'], 'required'],
            [['tanggal'], 'safe'],
            [['parameter_pernapasan', 'parameter_saturasi', 'parameter_temperatur', 'parameter_tekanan_darah_sistole', 'parameter_tekanan_darah_diastole', 'parameter_denyut_jantung', 'parameter_kesadaran', 'parameter_ketuban', 'parameter_discharge', 'parameter_proteinuria', 'code_blue'], 'string'],
            [['no_rawat'], 'string', 'max' => 17],
            [['skor_pernapasan', 'skor_saturasi', 'skor_temperatur', 'skor_tekanan_darah_sistole', 'skor_tekanan_darah_diastole', 'skor_denyut_jantung', 'skor_kesadaran', 'skor_ketuban', 'skor_discharge', 'skor_proteinuria'], 'string', 'max' => 1],
            [['skor_total'], 'string', 'max' => 2],
            [['parameter_total'], 'string', 'max' => 250],
            [['nip'], 'string', 'max' => 20],
            [['no_rawat', 'tanggal'], 'unique', 'targetAttribute' => ['no_rawat', 'tanggal']],
            [['nip'], 'exist', 'skipOnError' => true, 'targetClass' => Petugas::class, 'targetAttribute' => ['nip' => 'nip']],
            [['no_rawat'], 'exist', 'skipOnError' => true, 'targetClass' => RegPeriksa::class, 'targetAttribute' => ['no_rawat' => 'no_rawat']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'no_rawat' => 'No Rawat',
            'tanggal' => 'Tanggal',
            'parameter_pernapasan' => 'Parameter Pernapasan',
            'skor_pernapasan' => 'Skor Pernapasan',
            'parameter_saturasi' => 'Parameter Saturasi',
            'skor_saturasi' => 'Skor Saturasi',
            'parameter_temperatur' => 'Parameter Temperatur',
            'skor_temperatur' => 'Skor Temperatur',
            'parameter_tekanan_darah_sistole' => 'Parameter Tekanan Darah Sistole',
            'skor_tekanan_darah_sistole' => 'Skor Tekanan Darah Sistole',
            'parameter_tekanan_darah_diastole' => 'Parameter Tekanan Darah Diastole',
            'skor_tekanan_darah_diastole' => 'Skor Tekanan Darah Diastole',
            'parameter_denyut_jantung' => 'Parameter Denyut Jantung',
            'skor_denyut_jantung' => 'Skor Denyut Jantung',
            'parameter_kesadaran' => 'Parameter Kesadaran',
            'skor_kesadaran' => 'Skor Kesadaran',
            'parameter_ketuban' => 'Parameter Ketuban',
            'skor_ketuban' => 'Skor Ketuban',
            'parameter_discharge' => 'Parameter Discharge',
            'skor_discharge' => 'Skor Discharge',
            'parameter_proteinuria' => 'Parameter Proteinuria',
            'skor_proteinuria' => 'Skor Proteinuria',
            'skor_total' => 'Skor Total',
            'parameter_total' => 'Parameter Total',
            'code_blue' => 'Code Blue',
            'nip' => 'Nip',
        ];
    }

    /**
     * Gets query for [[Nip0]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getNip0()
    {
        return $this->hasOne(Petugas::class, ['nip' => 'nip']);
    }

    /**
     * Gets query for [[NoRawat]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getNoRawat()
    {
        return $this->hasOne(RegPeriksa::class, ['no_rawat' => 'no_rawat']);
    }
}
