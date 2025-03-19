<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "checklist_kriteria_masuk_hcu".
 *
 * @property string $no_rawat
 * @property string $tanggal
 * @property string $kardiologi1
 * @property string $kardiologi2
 * @property string $kardiologi3
 * @property string $kardiologi4
 * @property string $kardiologi5
 * @property string $kardiologi6
 * @property string $pernapasan1
 * @property string $pernapasan2
 * @property string $pernapasan3
 * @property string $syaraf1
 * @property string $syaraf2
 * @property string $syaraf3
 * @property string $syaraf4
 * @property string $pencernaan1
 * @property string $pencernaan2
 * @property string $pencernaan3
 * @property string $pencernaan4
 * @property string $pembedahan1
 * @property string $pembedahan2
 * @property string $hematologi1
 * @property string $hematologi2
 * @property string $infeksi
 * @property string|null $nik
 *
 * @property Pegawai $nik0
 * @property RegPeriksa $noRawat
 */
class ChecklistKriteriaMasukHcu extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'checklist_kriteria_masuk_hcu';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['no_rawat', 'tanggal', 'kardiologi1', 'kardiologi2', 'kardiologi3', 'kardiologi4', 'kardiologi5', 'kardiologi6', 'pernapasan1', 'pernapasan2', 'pernapasan3', 'syaraf1', 'syaraf2', 'syaraf3', 'syaraf4', 'pencernaan1', 'pencernaan2', 'pencernaan3', 'pencernaan4', 'pembedahan1', 'pembedahan2', 'hematologi1', 'hematologi2', 'infeksi'], 'required'],
            [['tanggal'], 'safe'],
            [['kardiologi1', 'kardiologi2', 'kardiologi3', 'kardiologi4', 'kardiologi5', 'kardiologi6', 'pernapasan1', 'pernapasan2', 'pernapasan3', 'syaraf1', 'syaraf2', 'syaraf3', 'syaraf4', 'pencernaan1', 'pencernaan2', 'pencernaan3', 'pencernaan4', 'pembedahan1', 'pembedahan2', 'hematologi1', 'hematologi2', 'infeksi'], 'string'],
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
            'kardiologi1' => 'Kardiologi1',
            'kardiologi2' => 'Kardiologi2',
            'kardiologi3' => 'Kardiologi3',
            'kardiologi4' => 'Kardiologi4',
            'kardiologi5' => 'Kardiologi5',
            'kardiologi6' => 'Kardiologi6',
            'pernapasan1' => 'Pernapasan1',
            'pernapasan2' => 'Pernapasan2',
            'pernapasan3' => 'Pernapasan3',
            'syaraf1' => 'Syaraf1',
            'syaraf2' => 'Syaraf2',
            'syaraf3' => 'Syaraf3',
            'syaraf4' => 'Syaraf4',
            'pencernaan1' => 'Pencernaan1',
            'pencernaan2' => 'Pencernaan2',
            'pencernaan3' => 'Pencernaan3',
            'pencernaan4' => 'Pencernaan4',
            'pembedahan1' => 'Pembedahan1',
            'pembedahan2' => 'Pembedahan2',
            'hematologi1' => 'Hematologi1',
            'hematologi2' => 'Hematologi2',
            'infeksi' => 'Infeksi',
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
