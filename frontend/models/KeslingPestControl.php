<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "kesling_pest_control".
 *
 * @property string $nip
 * @property string $tanggal
 * @property string|null $rincian_kegiatan
 * @property string|null $rekomendasi
 *
 * @property Petugas $nip0
 */
class KeslingPestControl extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'kesling_pest_control';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nip', 'tanggal'], 'required'],
            [['tanggal'], 'safe'],
            [['rincian_kegiatan', 'rekomendasi'], 'string'],
            [['nip'], 'string', 'max' => 20],
            [['nip', 'tanggal'], 'unique', 'targetAttribute' => ['nip', 'tanggal']],
            [['nip'], 'exist', 'skipOnError' => true, 'targetClass' => Petugas::class, 'targetAttribute' => ['nip' => 'nip']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'nip' => 'Nip',
            'tanggal' => 'Tanggal',
            'rincian_kegiatan' => 'Rincian Kegiatan',
            'rekomendasi' => 'Rekomendasi',
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
}
