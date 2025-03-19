<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "pemantauan_pews_anak".
 *
 * @property string $no_rawat
 * @property string $tanggal
 * @property string|null $parameter_perilaku
 * @property string|null $skor_perilaku
 * @property string|null $parameter_crt_atau_warna_kulit
 * @property string|null $skor_crt_atau_warna_kulit
 * @property string|null $parameter_perespirasi
 * @property string|null $skor_perespirasi
 * @property string|null $skor_total
 * @property string|null $parameter_total
 * @property string|null $nip
 *
 * @property Petugas $nip0
 * @property RegPeriksa $noRawat
 */
class PemantauanPewsAnak extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'pemantauan_pews_anak';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['no_rawat', 'tanggal'], 'required'],
            [['tanggal'], 'safe'],
            [['parameter_perilaku', 'parameter_crt_atau_warna_kulit', 'parameter_perespirasi'], 'string'],
            [['no_rawat'], 'string', 'max' => 17],
            [['skor_perilaku', 'skor_crt_atau_warna_kulit', 'skor_perespirasi', 'skor_total'], 'string', 'max' => 1],
            [['parameter_total'], 'string', 'max' => 250],
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
            'parameter_perilaku' => 'Parameter Perilaku',
            'skor_perilaku' => 'Skor Perilaku',
            'parameter_crt_atau_warna_kulit' => 'Parameter Crt Atau Warna Kulit',
            'skor_crt_atau_warna_kulit' => 'Skor Crt Atau Warna Kulit',
            'parameter_perespirasi' => 'Parameter Perespirasi',
            'skor_perespirasi' => 'Skor Perespirasi',
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
