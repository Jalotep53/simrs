<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "penilaian_pasien_terminal".
 *
 * @property string $no_rawat
 * @property string $tanggal
 * @property string $diagnosa
 * @property string $rps
 * @property string $rpd
 * @property string|null $keadaan_umum
 * @property string|null $kesadaran
 * @property string $td
 * @property string $nadi
 * @property string $suhu
 * @property string $rr
 * @property string $spo2
 * @property string $skala_nyeri
 * @property string|null $tahap_pasien_menjelang_ajal
 * @property string|null $tanda_klinis_menjelang_kematian
 * @property string|null $kebutuhan_spiritual_pasien
 * @property string $nip
 *
 * @property Petugas $nip0
 * @property RegPeriksa $noRawat
 */
class PenilaianPasienTerminal extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'penilaian_pasien_terminal';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['no_rawat', 'tanggal', 'diagnosa', 'rps', 'rpd', 'rr', 'spo2', 'skala_nyeri', 'nip'], 'required'],
            [['tanggal'], 'safe'],
            [['keadaan_umum', 'kesadaran', 'skala_nyeri', 'tahap_pasien_menjelang_ajal', 'tanda_klinis_menjelang_kematian'], 'string'],
            [['no_rawat'], 'string', 'max' => 17],
            [['diagnosa', 'rps', 'rpd', 'kebutuhan_spiritual_pasien'], 'string', 'max' => 500],
            [['td'], 'string', 'max' => 8],
            [['nadi', 'suhu', 'rr', 'spo2'], 'string', 'max' => 5],
            [['nip'], 'string', 'max' => 20],
            [['no_rawat'], 'unique'],
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
            'diagnosa' => 'Diagnosa',
            'rps' => 'Rps',
            'rpd' => 'Rpd',
            'keadaan_umum' => 'Keadaan Umum',
            'kesadaran' => 'Kesadaran',
            'td' => 'Td',
            'nadi' => 'Nadi',
            'suhu' => 'Suhu',
            'rr' => 'Rr',
            'spo2' => 'Spo2',
            'skala_nyeri' => 'Skala Nyeri',
            'tahap_pasien_menjelang_ajal' => 'Tahap Pasien Menjelang Ajal',
            'tanda_klinis_menjelang_kematian' => 'Tanda Klinis Menjelang Kematian',
            'kebutuhan_spiritual_pasien' => 'Kebutuhan Spiritual Pasien',
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
