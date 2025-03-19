<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "stts_kerja".
 *
 * @property string $stts
 * @property string $ktg
 * @property int $indek
 *
 * @property Pegawai[] $pegawais
 */
class SttsKerja extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'stts_kerja';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['stts', 'ktg', 'indek'], 'required'],
            [['indek'], 'integer'],
            [['stts'], 'string', 'max' => 3],
            [['ktg'], 'string', 'max' => 20],
            [['stts'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'stts' => 'Stts',
            'ktg' => 'Ktg',
            'indek' => 'Indek',
        ];
    }

    /**
     * Gets query for [[Pegawais]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getPegawais()
    {
        return $this->hasMany(Pegawai::class, ['stts_kerja' => 'stts']);
    }
}
