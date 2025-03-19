<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "follow_up_dbd".
 *
 * @property string $no_rawat
 * @property string $tgl_perawatan
 * @property string $jam_rawat
 * @property string|null $hemoglobin
 * @property string $hematokrit
 * @property string|null $leokosit
 * @property string|null $trombosit
 * @property string|null $terapi_cairan
 * @property string $nip
 *
 * @property Petugas $nip0
 * @property RegPeriksa $noRawat
 */
class FollowUpDbd extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'follow_up_dbd';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['no_rawat', 'tgl_perawatan', 'jam_rawat', 'hematokrit', 'nip'], 'required'],
            [['tgl_perawatan', 'jam_rawat'], 'safe'],
            [['no_rawat'], 'string', 'max' => 17],
            [['hemoglobin', 'hematokrit'], 'string', 'max' => 5],
            [['leokosit'], 'string', 'max' => 7],
            [['trombosit'], 'string', 'max' => 10],
            [['terapi_cairan'], 'string', 'max' => 100],
            [['nip'], 'string', 'max' => 20],
            [['no_rawat', 'tgl_perawatan', 'jam_rawat'], 'unique', 'targetAttribute' => ['no_rawat', 'tgl_perawatan', 'jam_rawat']],
            [['no_rawat'], 'exist', 'skipOnError' => true, 'targetClass' => RegPeriksa::class, 'targetAttribute' => ['no_rawat' => 'no_rawat']],
            [['nip'], 'exist', 'skipOnError' => true, 'targetClass' => Petugas::class, 'targetAttribute' => ['nip' => 'nip']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'no_rawat' => 'No Rawat',
            'tgl_perawatan' => 'Tgl Perawatan',
            'jam_rawat' => 'Jam Rawat',
            'hemoglobin' => 'Hemoglobin',
            'hematokrit' => 'Hematokrit',
            'leokosit' => 'Leokosit',
            'trombosit' => 'Trombosit',
            'terapi_cairan' => 'Terapi Cairan',
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
