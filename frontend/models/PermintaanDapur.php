<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "permintaan_dapur".
 *
 * @property string $no_permintaan
 * @property string|null $ruang
 * @property string|null $nip
 * @property string|null $tanggal
 * @property string|null $status
 *
 * @property DetailPermintaanDapur[] $detailPermintaanDapurs
 * @property Pegawai $nip0
 */
class PermintaanDapur extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'permintaan_dapur';
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
     * Gets query for [[DetailPermintaanDapurs]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getDetailPermintaanDapurs()
    {
        return $this->hasMany(DetailPermintaanDapur::class, ['no_permintaan' => 'no_permintaan']);
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
