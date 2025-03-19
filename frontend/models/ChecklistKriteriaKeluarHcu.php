<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "checklist_kriteria_keluar_hcu".
 *
 * @property string $no_rawat
 * @property string $tanggal
 * @property string $kriteria1
 * @property string $kriteria2
 * @property string $kriteria3
 * @property string $kriteria4
 * @property string $kriteria5
 * @property string $kriteria6
 * @property string $kriteria7
 * @property string $kriteria8
 * @property string $kriteria9
 * @property string $kriteria10
 * @property string $kriteria11
 * @property string $kriteria12
 * @property string|null $nik
 *
 * @property Pegawai $nik0
 * @property RegPeriksa $noRawat
 */
class ChecklistKriteriaKeluarHcu extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'checklist_kriteria_keluar_hcu';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['no_rawat', 'tanggal', 'kriteria1', 'kriteria2', 'kriteria3', 'kriteria4', 'kriteria5', 'kriteria6', 'kriteria7', 'kriteria8', 'kriteria9', 'kriteria10', 'kriteria11', 'kriteria12'], 'required'],
            [['tanggal'], 'safe'],
            [['kriteria1', 'kriteria2', 'kriteria3', 'kriteria4', 'kriteria5', 'kriteria6', 'kriteria7', 'kriteria8', 'kriteria9', 'kriteria10', 'kriteria11', 'kriteria12'], 'string'],
            [['no_rawat'], 'string', 'max' => 17],
            [['nik'], 'string', 'max' => 20],
            [['no_rawat', 'tanggal'], 'unique', 'targetAttribute' => ['no_rawat', 'tanggal']],
            [['nik'], 'exist', 'skipOnError' => true, 'targetClass' => Pegawai::class, 'targetAttribute' => ['nik' => 'nik']],
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
            'kriteria1' => 'Kriteria1',
            'kriteria2' => 'Kriteria2',
            'kriteria3' => 'Kriteria3',
            'kriteria4' => 'Kriteria4',
            'kriteria5' => 'Kriteria5',
            'kriteria6' => 'Kriteria6',
            'kriteria7' => 'Kriteria7',
            'kriteria8' => 'Kriteria8',
            'kriteria9' => 'Kriteria9',
            'kriteria10' => 'Kriteria10',
            'kriteria11' => 'Kriteria11',
            'kriteria12' => 'Kriteria12',
            'nik' => 'Nik',
        ];
    }

    /**
     * Gets query for [[Nik0]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getNik0()
    {
        return $this->hasOne(Pegawai::class, ['nik' => 'nik']);
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
