<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "checklist_kriteria_masuk_icu".
 *
 * @property string $no_rawat
 * @property string $tanggal
 * @property string $prioritas1_1
 * @property string $prioritas1_2
 * @property string $prioritas1_3
 * @property string $prioritas1_4
 * @property string $prioritas1_5
 * @property string $prioritas1_6
 * @property string $prioritas2_1
 * @property string $prioritas2_2
 * @property string $prioritas2_3
 * @property string $prioritas2_4
 * @property string $prioritas2_5
 * @property string $prioritas2_6
 * @property string $prioritas2_7
 * @property string $prioritas2_8
 * @property string $prioritas3_1
 * @property string $prioritas3_2
 * @property string $prioritas3_3
 * @property string $prioritas3_4
 * @property string $kriteria_fisiologis_tanda_vital_1
 * @property string $kriteria_fisiologis_tanda_vital_2
 * @property string $kriteria_fisiologis_tanda_vital_3
 * @property string $kriteria_fisiologis_tanda_vital_4
 * @property string $kriteria_fisiologis_tanda_vital_5
 * @property string $kriteria_fisiologis_laborat_1
 * @property string $kriteria_fisiologis_laborat_2
 * @property string $kriteria_fisiologis_laborat_3
 * @property string $kriteria_fisiologis_laborat_4
 * @property string $kriteria_fisiologis_laborat_5
 * @property string $kriteria_fisiologis_laborat_6
 * @property string $kriteria_fisiologis_radiologi_1
 * @property string $kriteria_fisiologis_radiologi_2
 * @property string $kriteria_fisiologis_klinis_1
 * @property string $kriteria_fisiologis_klinis_2
 * @property string $kriteria_fisiologis_klinis_3
 * @property string $kriteria_fisiologis_klinis_4
 * @property string $kriteria_fisiologis_klinis_5
 * @property string $kriteria_fisiologis_klinis_6
 * @property string $kriteria_fisiologis_klinis_7
 * @property string $kriteria_fisiologis_klinis_8
 * @property string|null $nik
 *
 * @property Pegawai $nik0
 * @property RegPeriksa $noRawat
 */
class ChecklistKriteriaMasukIcu extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'checklist_kriteria_masuk_icu';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['no_rawat', 'tanggal', 'prioritas1_1', 'prioritas1_2', 'prioritas1_3', 'prioritas1_4', 'prioritas1_5', 'prioritas1_6', 'prioritas2_1', 'prioritas2_2', 'prioritas2_3', 'prioritas2_4', 'prioritas2_5', 'prioritas2_6', 'prioritas2_7', 'prioritas2_8', 'prioritas3_1', 'prioritas3_2', 'prioritas3_3', 'prioritas3_4', 'kriteria_fisiologis_tanda_vital_1', 'kriteria_fisiologis_tanda_vital_2', 'kriteria_fisiologis_tanda_vital_3', 'kriteria_fisiologis_tanda_vital_4', 'kriteria_fisiologis_tanda_vital_5', 'kriteria_fisiologis_laborat_1', 'kriteria_fisiologis_laborat_2', 'kriteria_fisiologis_laborat_3', 'kriteria_fisiologis_laborat_4', 'kriteria_fisiologis_laborat_5', 'kriteria_fisiologis_laborat_6', 'kriteria_fisiologis_radiologi_1', 'kriteria_fisiologis_radiologi_2', 'kriteria_fisiologis_klinis_1', 'kriteria_fisiologis_klinis_2', 'kriteria_fisiologis_klinis_3', 'kriteria_fisiologis_klinis_4', 'kriteria_fisiologis_klinis_5', 'kriteria_fisiologis_klinis_6', 'kriteria_fisiologis_klinis_7', 'kriteria_fisiologis_klinis_8'], 'required'],
            [['tanggal'], 'safe'],
            [['prioritas1_1', 'prioritas1_2', 'prioritas1_3', 'prioritas1_4', 'prioritas1_5', 'prioritas1_6', 'prioritas2_1', 'prioritas2_2', 'prioritas2_3', 'prioritas2_4', 'prioritas2_5', 'prioritas2_6', 'prioritas2_7', 'prioritas2_8', 'prioritas3_1', 'prioritas3_2', 'prioritas3_3', 'prioritas3_4', 'kriteria_fisiologis_tanda_vital_1', 'kriteria_fisiologis_tanda_vital_2', 'kriteria_fisiologis_tanda_vital_3', 'kriteria_fisiologis_tanda_vital_4', 'kriteria_fisiologis_tanda_vital_5', 'kriteria_fisiologis_laborat_1', 'kriteria_fisiologis_laborat_2', 'kriteria_fisiologis_laborat_3', 'kriteria_fisiologis_laborat_4', 'kriteria_fisiologis_laborat_5', 'kriteria_fisiologis_laborat_6', 'kriteria_fisiologis_radiologi_1', 'kriteria_fisiologis_radiologi_2', 'kriteria_fisiologis_klinis_1', 'kriteria_fisiologis_klinis_2', 'kriteria_fisiologis_klinis_3', 'kriteria_fisiologis_klinis_4', 'kriteria_fisiologis_klinis_5', 'kriteria_fisiologis_klinis_6', 'kriteria_fisiologis_klinis_7', 'kriteria_fisiologis_klinis_8'], 'string'],
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
            'prioritas1_1' => 'Prioritas1 1',
            'prioritas1_2' => 'Prioritas1 2',
            'prioritas1_3' => 'Prioritas1 3',
            'prioritas1_4' => 'Prioritas1 4',
            'prioritas1_5' => 'Prioritas1 5',
            'prioritas1_6' => 'Prioritas1 6',
            'prioritas2_1' => 'Prioritas2 1',
            'prioritas2_2' => 'Prioritas2 2',
            'prioritas2_3' => 'Prioritas2 3',
            'prioritas2_4' => 'Prioritas2 4',
            'prioritas2_5' => 'Prioritas2 5',
            'prioritas2_6' => 'Prioritas2 6',
            'prioritas2_7' => 'Prioritas2 7',
            'prioritas2_8' => 'Prioritas2 8',
            'prioritas3_1' => 'Prioritas3 1',
            'prioritas3_2' => 'Prioritas3 2',
            'prioritas3_3' => 'Prioritas3 3',
            'prioritas3_4' => 'Prioritas3 4',
            'kriteria_fisiologis_tanda_vital_1' => 'Kriteria Fisiologis Tanda Vital 1',
            'kriteria_fisiologis_tanda_vital_2' => 'Kriteria Fisiologis Tanda Vital 2',
            'kriteria_fisiologis_tanda_vital_3' => 'Kriteria Fisiologis Tanda Vital 3',
            'kriteria_fisiologis_tanda_vital_4' => 'Kriteria Fisiologis Tanda Vital 4',
            'kriteria_fisiologis_tanda_vital_5' => 'Kriteria Fisiologis Tanda Vital 5',
            'kriteria_fisiologis_laborat_1' => 'Kriteria Fisiologis Laborat 1',
            'kriteria_fisiologis_laborat_2' => 'Kriteria Fisiologis Laborat 2',
            'kriteria_fisiologis_laborat_3' => 'Kriteria Fisiologis Laborat 3',
            'kriteria_fisiologis_laborat_4' => 'Kriteria Fisiologis Laborat 4',
            'kriteria_fisiologis_laborat_5' => 'Kriteria Fisiologis Laborat 5',
            'kriteria_fisiologis_laborat_6' => 'Kriteria Fisiologis Laborat 6',
            'kriteria_fisiologis_radiologi_1' => 'Kriteria Fisiologis Radiologi 1',
            'kriteria_fisiologis_radiologi_2' => 'Kriteria Fisiologis Radiologi 2',
            'kriteria_fisiologis_klinis_1' => 'Kriteria Fisiologis Klinis 1',
            'kriteria_fisiologis_klinis_2' => 'Kriteria Fisiologis Klinis 2',
            'kriteria_fisiologis_klinis_3' => 'Kriteria Fisiologis Klinis 3',
            'kriteria_fisiologis_klinis_4' => 'Kriteria Fisiologis Klinis 4',
            'kriteria_fisiologis_klinis_5' => 'Kriteria Fisiologis Klinis 5',
            'kriteria_fisiologis_klinis_6' => 'Kriteria Fisiologis Klinis 6',
            'kriteria_fisiologis_klinis_7' => 'Kriteria Fisiologis Klinis 7',
            'kriteria_fisiologis_klinis_8' => 'Kriteria Fisiologis Klinis 8',
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
