<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "skrining_nutrisi_anak".
 *
 * @property string $no_rawat
 * @property string $tanggal
 * @property string $td
 * @property string $hr
 * @property string $rr
 * @property string $suhu
 * @property string $bb
 * @property string $tbpb
 * @property string $spo2
 * @property string $alergi
 * @property string $sg1
 * @property string $nilai1
 * @property string $sg2
 * @property string $nilai2
 * @property string $sg3
 * @property string $nilai3
 * @property string $sg4
 * @property string $nilai4
 * @property int $total_hasil
 * @property string|null $skor_nutrisi
 * @property string $diketahui_dietisien
 * @property string $keterangan_diketahui_dietisien
 * @property string $nip
 *
 * @property Petugas $nip0
 * @property RegPeriksa $noRawat
 */
class SkriningNutrisiAnak extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'skrining_nutrisi_anak';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['no_rawat', 'tanggal', 'rr', 'sg1', 'nilai1', 'sg2', 'nilai2', 'sg3', 'nilai3', 'sg4', 'nilai4', 'total_hasil', 'diketahui_dietisien', 'keterangan_diketahui_dietisien', 'nip'], 'required'],
            [['tanggal'], 'safe'],
            [['sg1', 'nilai1', 'sg2', 'nilai2', 'sg3', 'nilai3', 'sg4', 'nilai4', 'skor_nutrisi', 'diketahui_dietisien'], 'string'],
            [['total_hasil'], 'integer'],
            [['no_rawat'], 'string', 'max' => 17],
            [['td'], 'string', 'max' => 8],
            [['hr', 'rr', 'suhu', 'bb', 'tbpb', 'spo2'], 'string', 'max' => 5],
            [['alergi'], 'string', 'max' => 100],
            [['keterangan_diketahui_dietisien'], 'string', 'max' => 10],
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
            'td' => 'Td',
            'hr' => 'Hr',
            'rr' => 'Rr',
            'suhu' => 'Suhu',
            'bb' => 'Bb',
            'tbpb' => 'Tbpb',
            'spo2' => 'Spo2',
            'alergi' => 'Alergi',
            'sg1' => 'Sg1',
            'nilai1' => 'Nilai1',
            'sg2' => 'Sg2',
            'nilai2' => 'Nilai2',
            'sg3' => 'Sg3',
            'nilai3' => 'Nilai3',
            'sg4' => 'Sg4',
            'nilai4' => 'Nilai4',
            'total_hasil' => 'Total Hasil',
            'skor_nutrisi' => 'Skor Nutrisi',
            'diketahui_dietisien' => 'Diketahui Dietisien',
            'keterangan_diketahui_dietisien' => 'Keterangan Diketahui Dietisien',
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
