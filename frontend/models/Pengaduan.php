<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "pengaduan".
 *
 * @property string $id
 * @property string $tanggal
 * @property string $no_rkm_medis
 * @property string $pesan
 *
 * @property BalasanPengaduan $balasanPengaduan
 * @property Pasien $noRkmMedis
 */
class Pengaduan extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'pengaduan';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'tanggal', 'no_rkm_medis', 'pesan'], 'required'],
            [['tanggal'], 'safe'],
            [['id', 'no_rkm_medis'], 'string', 'max' => 15],
            [['pesan'], 'string', 'max' => 255],
            [['id'], 'unique'],
            [['no_rkm_medis'], 'exist', 'skipOnError' => true, 'targetClass' => Pasien::class, 'targetAttribute' => ['no_rkm_medis' => 'no_rkm_medis']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'tanggal' => 'Tanggal',
            'no_rkm_medis' => 'No Rkm Medis',
            'pesan' => 'Pesan',
        ];
    }

    /**
     * Gets query for [[BalasanPengaduan]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getBalasanPengaduan()
    {
        return $this->hasOne(BalasanPengaduan::class, ['id_pengaduan' => 'id']);
    }

    /**
     * Gets query for [[NoRkmMedis]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getNoRkmMedis()
    {
        return $this->hasOne(Pasien::class, ['no_rkm_medis' => 'no_rkm_medis']);
    }
}
