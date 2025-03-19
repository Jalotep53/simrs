<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "bukti_perencanaan_pemulangan_saksikeluarga".
 *
 * @property string $no_rawat
 * @property string|null $photo
 *
 * @property PerencanaanPemulangan $noRawat
 */
class BuktiPerencanaanPemulanganSaksikeluarga extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'bukti_perencanaan_pemulangan_saksikeluarga';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['no_rawat'], 'required'],
            [['no_rawat'], 'string', 'max' => 17],
            [['photo'], 'string', 'max' => 500],
            [['no_rawat'], 'unique'],
            [['no_rawat'], 'exist', 'skipOnError' => true, 'targetClass' => PerencanaanPemulangan::class, 'targetAttribute' => ['no_rawat' => 'no_rawat']],
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
        return $this->hasOne(PerencanaanPemulangan::class, ['no_rawat' => 'no_rawat']);
    }
}
