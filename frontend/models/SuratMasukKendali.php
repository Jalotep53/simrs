<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "surat_masuk_kendali".
 *
 * @property string $no_kendali
 * @property string $kd_indeks
 * @property string $no_urut
 * @property string $tgl_selesai
 * @property string $tgl_kembali
 * @property string $kepada
 * @property string $pengesahan
 *
 * @property SuratIndeks $kdIndeks
 * @property SuratMasuk $noUrut
 */
class SuratMasukKendali extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'surat_masuk_kendali';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['no_kendali', 'kd_indeks', 'no_urut', 'tgl_selesai', 'tgl_kembali', 'kepada', 'pengesahan'], 'required'],
            [['tgl_selesai', 'tgl_kembali'], 'safe'],
            [['pengesahan'], 'string'],
            [['no_kendali'], 'string', 'max' => 15],
            [['kd_indeks', 'no_urut'], 'string', 'max' => 5],
            [['kepada'], 'string', 'max' => 100],
            [['no_kendali'], 'unique'],
            [['kd_indeks'], 'exist', 'skipOnError' => true, 'targetClass' => SuratIndeks::class, 'targetAttribute' => ['kd_indeks' => 'kd']],
            [['no_urut'], 'exist', 'skipOnError' => true, 'targetClass' => SuratMasuk::class, 'targetAttribute' => ['no_urut' => 'no_urut']],
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
            'pengesahan' => 'Pengesahan',
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
        return $this->hasOne(SuratMasuk::class, ['no_urut' => 'no_urut']);
    }
}
