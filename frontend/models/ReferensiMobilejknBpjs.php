<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "referensi_mobilejkn_bpjs".
 *
 * @property string $nobooking
 * @property string|null $no_rawat
 * @property string|null $nomorkartu
 * @property string|null $nik
 * @property string|null $nohp
 * @property string|null $kodepoli
 * @property string $pasienbaru
 * @property string|null $norm
 * @property string|null $tanggalperiksa
 * @property string|null $kodedokter
 * @property string|null $jampraktek
 * @property string|null $jeniskunjungan
 * @property string $nomorreferensi
 * @property string $nomorantrean
 * @property string $angkaantrean
 * @property string $estimasidilayani
 * @property int $sisakuotajkn
 * @property int $kuotajkn
 * @property int $sisakuotanonjkn
 * @property int $kuotanonjkn
 * @property string $status
 * @property string $validasi
 * @property string $statuskirim
 *
 * @property Pasien $norm0
 * @property ReferensiMobilejknBpjsBatal $referensiMobilejknBpjsBatal
 */
class ReferensiMobilejknBpjs extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'referensi_mobilejkn_bpjs';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nobooking', 'pasienbaru', 'nomorreferensi', 'nomorantrean', 'angkaantrean', 'estimasidilayani', 'sisakuotajkn', 'kuotajkn', 'sisakuotanonjkn', 'kuotanonjkn', 'status', 'validasi', 'statuskirim'], 'required'],
            [['pasienbaru', 'jeniskunjungan', 'status', 'statuskirim'], 'string'],
            [['tanggalperiksa', 'validasi'], 'safe'],
            [['sisakuotajkn', 'kuotajkn', 'sisakuotanonjkn', 'kuotanonjkn'], 'integer'],
            [['nobooking', 'nohp', 'kodepoli', 'norm', 'nomorantrean', 'estimasidilayani'], 'string', 'max' => 15],
            [['no_rawat'], 'string', 'max' => 17],
            [['nomorkartu'], 'string', 'max' => 25],
            [['nik'], 'string', 'max' => 30],
            [['kodedokter'], 'string', 'max' => 20],
            [['jampraktek'], 'string', 'max' => 12],
            [['nomorreferensi'], 'string', 'max' => 40],
            [['angkaantrean'], 'string', 'max' => 5],
            [['nobooking'], 'unique'],
            [['norm'], 'exist', 'skipOnError' => true, 'targetClass' => Pasien::class, 'targetAttribute' => ['norm' => 'no_rkm_medis']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'nobooking' => 'Nobooking',
            'no_rawat' => 'No Rawat',
            'nomorkartu' => 'Nomorkartu',
            'nik' => 'Nik',
            'nohp' => 'Nohp',
            'kodepoli' => 'Kodepoli',
            'pasienbaru' => 'Pasienbaru',
            'norm' => 'Norm',
            'tanggalperiksa' => 'Tanggalperiksa',
            'kodedokter' => 'Kodedokter',
            'jampraktek' => 'Jampraktek',
            'jeniskunjungan' => 'Jeniskunjungan',
            'nomorreferensi' => 'Nomorreferensi',
            'nomorantrean' => 'Nomorantrean',
            'angkaantrean' => 'Angkaantrean',
            'estimasidilayani' => 'Estimasidilayani',
            'sisakuotajkn' => 'Sisakuotajkn',
            'kuotajkn' => 'Kuotajkn',
            'sisakuotanonjkn' => 'Sisakuotanonjkn',
            'kuotanonjkn' => 'Kuotanonjkn',
            'status' => 'Status',
            'validasi' => 'Validasi',
            'statuskirim' => 'Statuskirim',
        ];
    }

    /**
     * Gets query for [[Norm0]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getNorm0()
    {
        return $this->hasOne(Pasien::class, ['no_rkm_medis' => 'norm']);
    }

    /**
     * Gets query for [[ReferensiMobilejknBpjsBatal]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getReferensiMobilejknBpjsBatal()
    {
        return $this->hasOne(ReferensiMobilejknBpjsBatal::class, ['nobooking' => 'nobooking']);
    }
}
