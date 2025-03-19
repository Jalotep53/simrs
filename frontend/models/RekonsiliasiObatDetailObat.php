<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "rekonsiliasi_obat_detail_obat".
 *
 * @property string|null $no_rekonsiliasi
 * @property string|null $nama_obat
 * @property string|null $dosis_obat
 * @property string|null $frekuensi
 * @property string|null $cara_pemberian
 * @property string|null $waktu_pemberian_terakhir
 * @property string|null $tindak_lanjut
 * @property string|null $perubahan_aturan_pakai
 *
 * @property RekonsiliasiObat $noRekonsiliasi
 */
class RekonsiliasiObatDetailObat extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'rekonsiliasi_obat_detail_obat';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['tindak_lanjut'], 'string'],
            [['no_rekonsiliasi', 'dosis_obat', 'waktu_pemberian_terakhir'], 'string', 'max' => 20],
            [['nama_obat'], 'string', 'max' => 100],
            [['frekuensi'], 'string', 'max' => 10],
            [['cara_pemberian', 'perubahan_aturan_pakai'], 'string', 'max' => 150],
            [['no_rekonsiliasi'], 'exist', 'skipOnError' => true, 'targetClass' => RekonsiliasiObat::class, 'targetAttribute' => ['no_rekonsiliasi' => 'no_rekonsiliasi']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'no_rekonsiliasi' => 'No Rekonsiliasi',
            'nama_obat' => 'Nama Obat',
            'dosis_obat' => 'Dosis Obat',
            'frekuensi' => 'Frekuensi',
            'cara_pemberian' => 'Cara Pemberian',
            'waktu_pemberian_terakhir' => 'Waktu Pemberian Terakhir',
            'tindak_lanjut' => 'Tindak Lanjut',
            'perubahan_aturan_pakai' => 'Perubahan Aturan Pakai',
        ];
    }

    /**
     * Gets query for [[NoRekonsiliasi]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getNoRekonsiliasi()
    {
        return $this->hasOne(RekonsiliasiObat::class, ['no_rekonsiliasi' => 'no_rekonsiliasi']);
    }
}
