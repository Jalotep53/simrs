<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "permintaan_non_medis".
 *
 * @property string $no_permintaan
 * @property string|null $ruang
 * @property string|null $nip
 * @property string|null $tanggal
 * @property string|null $status
 *
 * @property DetailPermintaanNonMedis[] $detailPermintaanNonMedis
 * @property Pegawai $nip0
 */
class PermintaanNonMedis extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'permintaan_non_medis';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['no_permintaan'], 'required'],
            [['tanggal'], 'safe'],
            [['status'], 'string'],
            [['no_permintaan', 'nip'], 'string', 'max' => 20],
            [['ruang'], 'string', 'max' => 50],
            [['no_permintaan'], 'unique'],
            [['nip'], 'exist', 'skipOnError' => true, 'targetClass' => Pegawai::class, 'targetAttribute' => ['nip' => 'nik']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'no_permintaan' => 'No Permintaan',
            'ruang' => 'Ruang',
            'nip' => 'Nip',
            'tanggal' => 'Tanggal',
            'status' => 'Status',
        ];
    }

    /**
     * Gets query for [[DetailPermintaanNonMedis]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getDetailPermintaanNonMedis()
    {
        return $this->hasMany(DetailPermintaanNonMedis::class, ['no_permintaan' => 'no_permintaan']);
    }

    /**
     * Gets query for [[Nip0]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getNip0()
    {
        return $this->hasOne(Pegawai::class, ['nik' => 'nip']);
    }
}
