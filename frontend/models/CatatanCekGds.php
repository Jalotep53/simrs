<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "catatan_cek_gds".
 *
 * @property string $no_rawat
 * @property string $tgl_perawatan
 * @property string $jam_rawat
 * @property string|null $gdp
 * @property string|null $insulin
 * @property string|null $obat_gula
 * @property string $nip
 *
 * @property Petugas $nip0
 * @property RegPeriksa $noRawat
 */
class CatatanCekGds extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'catatan_cek_gds';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['no_rawat', 'tgl_perawatan', 'jam_rawat', 'nip'], 'required'],
            [['tgl_perawatan', 'jam_rawat'], 'safe'],
            [['no_rawat'], 'string', 'max' => 17],
            [['gdp'], 'string', 'max' => 5],
            [['insulin', 'obat_gula'], 'string', 'max' => 30],
            [['nip'], 'string', 'max' => 20],
            [['no_rawat', 'tgl_perawatan', 'jam_rawat'], 'unique', 'targetAttribute' => ['no_rawat', 'tgl_perawatan', 'jam_rawat']],
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
            'tgl_perawatan' => 'Tgl Perawatan',
            'jam_rawat' => 'Jam Rawat',
            'gdp' => 'Gdp',
            'insulin' => 'Insulin',
            'obat_gula' => 'Obat Gula',
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
