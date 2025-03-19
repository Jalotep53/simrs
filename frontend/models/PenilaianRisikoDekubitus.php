<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "penilaian_risiko_dekubitus".
 *
 * @property string $no_rawat
 * @property string $tanggal
 * @property string|null $kondisi_fisik
 * @property int|null $kondisi_fisik_nilai
 * @property string|null $status_mental
 * @property int|null $status_mental_nilai
 * @property string|null $aktifitas
 * @property int|null $aktifitas_nilai
 * @property string|null $mobilitas
 * @property int|null $mobilitas_nilai
 * @property string|null $inkontinensia
 * @property int|null $inkontinensia_nilai
 * @property int|null $totalnilai
 * @property string|null $kategorinilai
 * @property string $nip
 *
 * @property Petugas $nip0
 * @property RegPeriksa $noRawat
 */
class PenilaianRisikoDekubitus extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'penilaian_risiko_dekubitus';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['no_rawat', 'tanggal', 'nip'], 'required'],
            [['tanggal'], 'safe'],
            [['kondisi_fisik', 'status_mental', 'aktifitas', 'mobilitas', 'inkontinensia', 'kategorinilai'], 'string'],
            [['kondisi_fisik_nilai', 'status_mental_nilai', 'aktifitas_nilai', 'mobilitas_nilai', 'inkontinensia_nilai', 'totalnilai'], 'integer'],
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
            'kondisi_fisik' => 'Kondisi Fisik',
            'kondisi_fisik_nilai' => 'Kondisi Fisik Nilai',
            'status_mental' => 'Status Mental',
            'status_mental_nilai' => 'Status Mental Nilai',
            'aktifitas' => 'Aktifitas',
            'aktifitas_nilai' => 'Aktifitas Nilai',
            'mobilitas' => 'Mobilitas',
            'mobilitas_nilai' => 'Mobilitas Nilai',
            'inkontinensia' => 'Inkontinensia',
            'inkontinensia_nilai' => 'Inkontinensia Nilai',
            'totalnilai' => 'Totalnilai',
            'kategorinilai' => 'Kategorinilai',
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
