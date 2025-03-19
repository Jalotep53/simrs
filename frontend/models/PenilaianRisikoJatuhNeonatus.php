<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "penilaian_risiko_jatuh_neonatus".
 *
 * @property string $no_rawat
 * @property string $tanggal
 * @property string|null $intervensi1
 * @property string|null $intervensi2
 * @property string|null $intervensi3
 * @property string|null $intervensi4
 * @property string|null $intervensi5
 * @property string|null $intervensi6
 * @property string|null $intervensi7
 * @property string|null $intervensi8
 * @property string|null $intervensi9
 * @property string|null $edukasi1
 * @property string|null $edukasi2
 * @property string|null $edukasi3
 * @property string|null $edukasi4
 * @property string|null $edukasi5
 * @property string|null $sasaran1
 * @property string|null $sasaran2
 * @property string|null $sasaran3
 * @property string|null $sasaran4
 * @property string|null $evaluasi1
 * @property string|null $evaluasi2
 * @property string|null $evaluasi3
 * @property string $nip
 *
 * @property Petugas $nip0
 * @property RegPeriksa $noRawat
 */
class PenilaianRisikoJatuhNeonatus extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'penilaian_risiko_jatuh_neonatus';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['no_rawat', 'tanggal', 'nip'], 'required'],
            [['tanggal'], 'safe'],
            [['intervensi1', 'intervensi2', 'intervensi3', 'intervensi4', 'intervensi5', 'intervensi6', 'intervensi7', 'intervensi8', 'intervensi9', 'edukasi1', 'edukasi2', 'edukasi3', 'edukasi4', 'edukasi5', 'sasaran1', 'sasaran2', 'sasaran3', 'sasaran4', 'evaluasi1', 'evaluasi2', 'evaluasi3'], 'string'],
            [['no_rawat'], 'string', 'max' => 17],
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
            'intervensi1' => 'Intervensi1',
            'intervensi2' => 'Intervensi2',
            'intervensi3' => 'Intervensi3',
            'intervensi4' => 'Intervensi4',
            'intervensi5' => 'Intervensi5',
            'intervensi6' => 'Intervensi6',
            'intervensi7' => 'Intervensi7',
            'intervensi8' => 'Intervensi8',
            'intervensi9' => 'Intervensi9',
            'edukasi1' => 'Edukasi1',
            'edukasi2' => 'Edukasi2',
            'edukasi3' => 'Edukasi3',
            'edukasi4' => 'Edukasi4',
            'edukasi5' => 'Edukasi5',
            'sasaran1' => 'Sasaran1',
            'sasaran2' => 'Sasaran2',
            'sasaran3' => 'Sasaran3',
            'sasaran4' => 'Sasaran4',
            'evaluasi1' => 'Evaluasi1',
            'evaluasi2' => 'Evaluasi2',
            'evaluasi3' => 'Evaluasi3',
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
