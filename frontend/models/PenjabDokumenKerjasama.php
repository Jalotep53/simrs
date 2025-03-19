<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "penjab_dokumen_kerjasama".
 *
 * @property string $kd_pj
 * @property string $kerjasama_berakhir
 * @property string|null $photo
 *
 * @property Penjab $kdPj
 */
class PenjabDokumenKerjasama extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'penjab_dokumen_kerjasama';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['kd_pj', 'kerjasama_berakhir'], 'required'],
            [['kerjasama_berakhir'], 'safe'],
            [['kd_pj'], 'string', 'max' => 3],
            [['photo'], 'string', 'max' => 500],
            [['kd_pj'], 'unique'],
            [['kd_pj'], 'exist', 'skipOnError' => true, 'targetClass' => Penjab::class, 'targetAttribute' => ['kd_pj' => 'kd_pj']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'kd_pj' => 'Kd Pj',
            'kerjasama_berakhir' => 'Kerjasama Berakhir',
            'photo' => 'Photo',
        ];
    }

    /**
     * Gets query for [[KdPj]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getKdPj()
    {
        return $this->hasOne(Penjab::class, ['kd_pj' => 'kd_pj']);
    }
}
