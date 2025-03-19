<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "catatan_keperawatan_ralan".
 *
 * @property string $tanggal
 * @property string $jam
 * @property string $no_rawat
 * @property string|null $uraian
 * @property string $nip
 *
 * @property Petugas $nip0
 * @property RegPeriksa $noRawat
 */
class CatatanKeperawatanRalan extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'catatan_keperawatan_ralan';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['tanggal', 'jam', 'no_rawat', 'nip'], 'required'],
            [['tanggal', 'jam'], 'safe'],
            [['no_rawat'], 'string', 'max' => 17],
            [['uraian'], 'string', 'max' => 1000],
            [['nip'], 'string', 'max' => 20],
            [['tanggal', 'jam', 'no_rawat'], 'unique', 'targetAttribute' => ['tanggal', 'jam', 'no_rawat']],
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
            'tanggal' => 'Tanggal',
            'jam' => 'Jam',
            'no_rawat' => 'No Rawat',
            'uraian' => 'Uraian',
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
