<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "bukti_persetujuan_penundaan_pelayanan".
 *
 * @property string $no_surat
 * @property string|null $photo
 *
 * @property PersetujuanPenundaanPelayanan $noSurat
 */
class BuktiPersetujuanPenundaanPelayanan extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'bukti_persetujuan_penundaan_pelayanan';
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
            [['no_surat'], 'exist', 'skipOnError' => true, 'targetClass' => PersetujuanPenundaanPelayanan::class, 'targetAttribute' => ['no_surat' => 'no_surat']],
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
        return $this->hasOne(PersetujuanPenundaanPelayanan::class, ['no_surat' => 'no_surat']);
    }
}
