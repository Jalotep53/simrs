<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "skrining_gizi".
 *
 * @property string $no_rawat
 * @property string $tanggal
 * @property string|null $skrining_bb
 * @property string|null $skrining_tb
 * @property string|null $alergi
 * @property string|null $parameter_imt
 * @property string|null $skor_imt
 * @property string|null $parameter_bb
 * @property string|null $skor_bb
 * @property string|null $parameter_penyakit
 * @property string|null $skor_penyakit
 * @property string|null $skor_total
 * @property string|null $parameter_total
 * @property string|null $nip
 *
 * @property Petugas $nip0
 * @property RegPeriksa $noRawat
 */
class SkriningGizi extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'skrining_gizi';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['no_rawat', 'tanggal'], 'required'],
            [['tanggal'], 'safe'],
            [['parameter_imt', 'parameter_bb', 'parameter_penyakit'], 'string'],
            [['no_rawat'], 'string', 'max' => 17],
            [['skrining_bb', 'skrining_tb', 'skor_imt', 'skor_bb', 'skor_penyakit', 'skor_total'], 'string', 'max' => 5],
            [['alergi'], 'string', 'max' => 25],
            [['parameter_total'], 'string', 'max' => 200],
            [['nip'], 'string', 'max' => 20],
            [['no_rawat', 'tanggal'], 'unique', 'targetAttribute' => ['no_rawat', 'tanggal']],
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
            'tanggal' => 'Tanggal',
            'skrining_bb' => 'Skrining Bb',
            'skrining_tb' => 'Skrining Tb',
            'alergi' => 'Alergi',
            'parameter_imt' => 'Parameter Imt',
            'skor_imt' => 'Skor Imt',
            'parameter_bb' => 'Parameter Bb',
            'skor_bb' => 'Skor Bb',
            'parameter_penyakit' => 'Parameter Penyakit',
            'skor_penyakit' => 'Skor Penyakit',
            'skor_total' => 'Skor Total',
            'parameter_total' => 'Parameter Total',
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
