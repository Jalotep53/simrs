<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "hasil_pemeriksaan_usg_gynecologi_gambar".
 *
 * @property string $no_rawat
 * @property string|null $photo
 *
 * @property HasilPemeriksaanUsgGynecologi $noRawat
 */
class HasilPemeriksaanUsgGynecologiGambar extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'hasil_pemeriksaan_usg_gynecologi_gambar';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['no_rawat'], 'required'],
            [['no_rawat'], 'string', 'max' => 20],
            [['photo'], 'string', 'max' => 500],
            [['no_rawat'], 'unique'],
            [['no_rawat'], 'exist', 'skipOnError' => true, 'targetClass' => HasilPemeriksaanUsgGynecologi::class, 'targetAttribute' => ['no_rawat' => 'no_rawat']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'no_rawat' => 'No Rawat',
            'photo' => 'Photo',
        ];
    }

    /**
     * Gets query for [[NoRawat]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getNoRawat()
    {
        return $this->hasOne(HasilPemeriksaanUsgGynecologi::class, ['no_rawat' => 'no_rawat']);
    }
}
