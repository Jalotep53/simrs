<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "surat_masuk_disposisi".
 *
 * @property string $no_disposisi
 * @property string $kd_indeks
 * @property string $no_urut
 * @property string $tgl_selesai
 * @property string $isi
 * @property string $diteruskan
 * @property string $tgl_kembali
 * @property string $kepada
 * @property string $pengesahan
 * @property string $harap
 * @property string $catatan
 *
 * @property SuratIndeks $kdIndeks
 * @property SuratMasuk $noUrut
 */
class SuratMasukDisposisi extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'surat_masuk_disposisi';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['no_disposisi', 'kd_indeks', 'no_urut', 'tgl_selesai', 'isi', 'diteruskan', 'tgl_kembali', 'kepada', 'pengesahan', 'harap', 'catatan'], 'required'],
            [['tgl_selesai', 'tgl_kembali'], 'safe'],
            [['pengesahan'], 'string'],
            [['no_disposisi', 'no_urut'], 'string', 'max' => 15],
            [['kd_indeks'], 'string', 'max' => 5],
            [['isi', 'diteruskan', 'harap', 'catatan'], 'string', 'max' => 300],
            [['kepada'], 'string', 'max' => 100],
            [['no_disposisi'], 'unique'],
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
            'no_disposisi' => 'No Disposisi',
            'kd_indeks' => 'Kd Indeks',
            'no_urut' => 'No Urut',
            'tgl_selesai' => 'Tgl Selesai',
            'isi' => 'Isi',
            'diteruskan' => 'Diteruskan',
            'tgl_kembali' => 'Tgl Kembali',
            'kepada' => 'Kepada',
            'pengesahan' => 'Pengesahan',
            'harap' => 'Harap',
            'catatan' => 'Catatan',
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
