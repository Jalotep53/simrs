<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "jawaban_pio_apoteker".
 *
 * @property string $no_permintaan
 * @property string $tanggal_jawab
 * @property string|null $metode
 * @property string|null $penyampaian_jawaban
 * @property string|null $jawaban
 * @property string|null $referensi
 * @property string|null $nip
 *
 * @property Petugas $nip0
 * @property PelayananInformasiObat $noPermintaan
 */
class JawabanPioApoteker extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'jawaban_pio_apoteker';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['no_permintaan', 'tanggal_jawab'], 'required'],
            [['tanggal_jawab'], 'safe'],
            [['metode', 'penyampaian_jawaban'], 'string'],
            [['no_permintaan', 'nip'], 'string', 'max' => 20],
            [['jawaban', 'referensi'], 'string', 'max' => 500],
            [['no_permintaan'], 'unique'],
            [['nip'], 'exist', 'skipOnError' => true, 'targetClass' => Petugas::class, 'targetAttribute' => ['nip' => 'nip']],
            [['no_permintaan'], 'exist', 'skipOnError' => true, 'targetClass' => PelayananInformasiObat::class, 'targetAttribute' => ['no_permintaan' => 'no_permintaan']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'no_permintaan' => 'No Permintaan',
            'tanggal_jawab' => 'Tanggal Jawab',
            'metode' => 'Metode',
            'penyampaian_jawaban' => 'Penyampaian Jawaban',
            'jawaban' => 'Jawaban',
            'referensi' => 'Referensi',
            'nip' => 'Nip',
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

    /**
     * Gets query for [[NoPermintaan]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getNoPermintaan()
    {
        return $this->hasOne(PelayananInformasiObat::class, ['no_permintaan' => 'no_permintaan']);
    }
}
