<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "balasan_pengaduan".
 *
 * @property string $id_pengaduan
 * @property string|null $pesan_balasan
 *
 * @property Pengaduan $pengaduan
 */
class BalasanPengaduan extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'balasan_pengaduan';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_pengaduan'], 'required'],
            [['id_pengaduan'], 'string', 'max' => 15],
            [['pesan_balasan'], 'string', 'max' => 50],
            [['id_pengaduan'], 'unique'],
            [['id_pengaduan'], 'exist', 'skipOnError' => true, 'targetClass' => Pengaduan::class, 'targetAttribute' => ['id_pengaduan' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_pengaduan' => 'Id Pengaduan',
            'pesan_balasan' => 'Pesan Balasan',
        ];
    }

    /**
     * Gets query for [[Pengaduan]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getPengaduan()
    {
        return $this->hasOne(Pengaduan::class, ['id' => 'id_pengaduan']);
    }
}
