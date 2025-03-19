<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "pemantauan_ews_neonatus".
 *
 * @property string $no_rawat
 * @property string $tanggal
 * @property string|null $parameter1
 * @property string|null $skor1
 * @property string|null $parameter2
 * @property string|null $skor2
 * @property string|null $parameter3
 * @property string|null $skor3
 * @property string|null $parameter4
 * @property string|null $skor4
 * @property string|null $parameter5
 * @property string|null $skor5
 * @property string|null $parameter6
 * @property string|null $skor6
 * @property string|null $parameter7
 * @property string|null $skor7
 * @property string|null $parameter8
 * @property string|null $skor8
 * @property string|null $skor_total
 * @property string|null $parameter_total
 * @property string $code_blue
 * @property string|null $nip
 *
 * @property Petugas $nip0
 * @property RegPeriksa $noRawat
 */
class PemantauanEwsNeonatus extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'pemantauan_ews_neonatus';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['no_rawat', 'tanggal', 'code_blue'], 'required'],
            [['tanggal'], 'safe'],
            [['parameter1', 'parameter2', 'parameter3', 'parameter4', 'parameter5', 'parameter6', 'parameter7', 'parameter8', 'code_blue'], 'string'],
            [['no_rawat'], 'string', 'max' => 17],
            [['skor1', 'skor2', 'skor3', 'skor4', 'skor5', 'skor6', 'skor7', 'skor8'], 'string', 'max' => 1],
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
            'parameter1' => 'Parameter1',
            'skor1' => 'Skor1',
            'parameter2' => 'Parameter2',
            'skor2' => 'Skor2',
            'parameter3' => 'Parameter3',
            'skor3' => 'Skor3',
            'parameter4' => 'Parameter4',
            'skor4' => 'Skor4',
            'parameter5' => 'Parameter5',
            'skor5' => 'Skor5',
            'parameter6' => 'Parameter6',
            'skor6' => 'Skor6',
            'parameter7' => 'Parameter7',
            'skor7' => 'Skor7',
            'parameter8' => 'Parameter8',
            'skor8' => 'Skor8',
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
