<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "returbeli".
 *
 * @property string $no_retur_beli
 * @property string|null $tgl_retur
 * @property string|null $nip
 * @property string $kode_suplier
 * @property string $kd_bangsal
 *
 * @property Detreturbeli[] $detreturbelis
 * @property Bangsal $kdBangsal
 * @property Datasuplier $kodeSuplier
 * @property Petugas $nip0
 */
class Returbeli extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'returbeli';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['no_retur_beli', 'kode_suplier', 'kd_bangsal'], 'required'],
            [['tgl_retur'], 'safe'],
            [['no_retur_beli', 'nip'], 'string', 'max' => 20],
            [['kode_suplier', 'kd_bangsal'], 'string', 'max' => 5],
            [['no_retur_beli'], 'unique'],
            [['kode_suplier'], 'exist', 'skipOnError' => true, 'targetClass' => Datasuplier::class, 'targetAttribute' => ['kode_suplier' => 'kode_suplier']],
            [['nip'], 'exist', 'skipOnError' => true, 'targetClass' => Petugas::class, 'targetAttribute' => ['nip' => 'nip']],
            [['kd_bangsal'], 'exist', 'skipOnError' => true, 'targetClass' => Bangsal::class, 'targetAttribute' => ['kd_bangsal' => 'kd_bangsal']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'no_retur_beli' => 'No Retur Beli',
            'tgl_retur' => 'Tgl Retur',
            'nip' => 'Nip',
            'kode_suplier' => 'Kode Suplier',
            'kd_bangsal' => 'Kd Bangsal',
        ];
    }

    /**
     * Gets query for [[Detreturbelis]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getDetreturbelis()
    {
        return $this->hasMany(Detreturbeli::class, ['no_retur_beli' => 'no_retur_beli']);
    }

    /**
     * Gets query for [[KdBangsal]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getKdBangsal()
    {
        return $this->hasOne(Bangsal::class, ['kd_bangsal' => 'kd_bangsal']);
    }

    /**
     * Gets query for [[KodeSuplier]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getKodeSuplier()
    {
        return $this->hasOne(Datasuplier::class, ['kode_suplier' => 'kode_suplier']);
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
}
