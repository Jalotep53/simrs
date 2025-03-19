<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "mpp_skrining".
 *
 * @property string $no_rawat
 * @property string $tanggal
 * @property string|null $param1
 * @property string|null $param2
 * @property string|null $param3
 * @property string|null $param4
 * @property string|null $param5
 * @property string|null $param6
 * @property string|null $param7
 * @property string|null $param8
 * @property string|null $param9
 * @property string|null $param10
 * @property string|null $param11
 * @property string|null $param12
 * @property string|null $param13
 * @property string|null $param14
 * @property string|null $param15
 * @property string|null $param16
 * @property string $nip
 *
 * @property Pegawai $nip0
 * @property RegPeriksa $noRawat
 */
class MppSkrining extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'mpp_skrining';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['no_rawat', 'tanggal', 'nip'], 'required'],
            [['tanggal'], 'safe'],
            [['param1', 'param2', 'param3', 'param4', 'param5', 'param6', 'param7', 'param8', 'param9', 'param10', 'param11', 'param12', 'param13', 'param14', 'param15', 'param16'], 'string'],
            [['no_rawat'], 'string', 'max' => 17],
            [['nip'], 'string', 'max' => 20],
            [['no_rawat', 'tanggal'], 'unique', 'targetAttribute' => ['no_rawat', 'tanggal']],
            [['no_rawat'], 'exist', 'skipOnError' => true, 'targetClass' => RegPeriksa::class, 'targetAttribute' => ['no_rawat' => 'no_rawat']],
            [['nip'], 'exist', 'skipOnError' => true, 'targetClass' => Pegawai::class, 'targetAttribute' => ['nip' => 'nik']],
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
            'param1' => 'Param1',
            'param2' => 'Param2',
            'param3' => 'Param3',
            'param4' => 'Param4',
            'param5' => 'Param5',
            'param6' => 'Param6',
            'param7' => 'Param7',
            'param8' => 'Param8',
            'param9' => 'Param9',
            'param10' => 'Param10',
            'param11' => 'Param11',
            'param12' => 'Param12',
            'param13' => 'Param13',
            'param14' => 'Param14',
            'param15' => 'Param15',
            'param16' => 'Param16',
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
        return $this->hasOne(Pegawai::class, ['nik' => 'nip']);
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
