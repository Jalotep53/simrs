<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "surat_pulang_atas_permintaan_sendiri_pembuat_pernyataan".
 *
 * @property string $no_surat
 * @property string|null $photo
 *
 * @property SuratPulangAtasPermintaanSendiri $noSurat
 */
class SuratPulangAtasPermintaanSendiriPembuatPernyataan extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'surat_pulang_atas_permintaan_sendiri_pembuat_pernyataan';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['no_surat'], 'required'],
            [['no_surat'], 'string', 'max' => 20],
            [['photo'], 'string', 'max' => 500],
            [['no_surat'], 'unique'],
            [['no_surat'], 'exist', 'skipOnError' => true, 'targetClass' => SuratPulangAtasPermintaanSendiri::class, 'targetAttribute' => ['no_surat' => 'no_surat']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'no_surat' => 'No Surat',
            'photo' => 'Photo',
        ];
    }

    /**
     * Gets query for [[NoSurat]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getNoSurat()
    {
        return $this->hasOne(SuratPulangAtasPermintaanSendiri::class, ['no_surat' => 'no_surat']);
    }
}
