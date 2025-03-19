<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "surat_keluar_kendali".
 *
 * @property string $no_kendali
 * @property string $kd_indeks
 * @property string $no_urut
 * @property string $tgl_selesai
 * @property string $tgl_kembali
 * @property string $kepada
 *
 * @property SuratIndeks $kdIndeks
 * @property SuratKeluar $noUrut
 */
class SuratKeluarKendali extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'surat_keluar_kendali';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['no_kendali', 'kd_indeks', 'no_urut', 'tgl_selesai', 'tgl_kembali', 'kepada'], 'required'],
            [['tgl_selesai', 'tgl_kembali'], 'safe'],
            [['no_kendali'], 'string', 'max' => 15],
            [['kd_indeks', 'no_urut'], 'string', 'max' => 5],
            [['kepada'], 'string', 'max' => 100],
            [['no_kendali'], 'unique'],
            [['kd_indeks'], 'exist', 'skipOnError' => true, 'targetClass' => SuratIndeks::class, 'targetAttribute' => ['kd_indeks' => 'kd']],
            [['no_urut'], 'exist', 'skipOnError' => true, 'targetClass' => SuratKeluar::class, 'targetAttribute' => ['no_urut' => 'no_urut']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'no_kendali' => 'No Kendali',
            'kd_indeks' => 'Kd Indeks',
            'no_urut' => 'No Urut',
            'tgl_selesai' => 'Tgl Selesai',
            'tgl_kembali' => 'Tgl Kembali',
            'kepada' => 'Kepada',
        ];
    }

    /**
     * Gets query for [[KdIndeks]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getKdIndeks()
    {
        return $this->hasOne(SuratIndeks::class, ['kd' => 'kd_indeks']);
    }

    /**
     * Gets query for [[NoUrut]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getNoUrut()
    {
        return $this->hasOne(SuratKeluar::class, ['no_urut' => 'no_urut']);
    }
}
