<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "bukti_persetujuan_penolakan_tindakan_saksikeluarga".
 *
 * @property string $no_pernyataan
 * @property string|null $photo
 *
 * @property PersetujuanPenolakanTindakan $noPernyataan
 */
class BuktiPersetujuanPenolakanTindakanSaksikeluarga extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'bukti_persetujuan_penolakan_tindakan_saksikeluarga';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['no_pernyataan'], 'required'],
            [['no_pernyataan'], 'string', 'max' => 20],
            [['photo'], 'string', 'max' => 500],
            [['no_pernyataan'], 'unique'],
            [['no_pernyataan'], 'exist', 'skipOnError' => true, 'targetClass' => PersetujuanPenolakanTindakan::class, 'targetAttribute' => ['no_pernyataan' => 'no_pernyataan']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'no_pernyataan' => 'No Pernyataan',
            'photo' => 'Photo',
        ];
    }

    /**
     * Gets query for [[NoPernyataan]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getNoPernyataan()
    {
        return $this->hasOne(PersetujuanPenolakanTindakan::class, ['no_pernyataan' => 'no_pernyataan']);
    }
}
