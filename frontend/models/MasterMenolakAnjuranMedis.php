<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "master_menolak_anjuran_medis".
 *
 * @property string $kode_penolakan
 * @property string|null $nama_penolakan
 *
 * @property SuratPenolakanAnjuranMedis[] $suratPenolakanAnjuranMedis
 */
class MasterMenolakAnjuranMedis extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'master_menolak_anjuran_medis';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['kode_penolakan'], 'required'],
            [['kode_penolakan'], 'string', 'max' => 3],
            [['nama_penolakan'], 'string', 'max' => 40],
            [['kode_penolakan'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'kode_penolakan' => 'Kode Penolakan',
            'nama_penolakan' => 'Nama Penolakan',
        ];
    }

    /**
     * Gets query for [[SuratPenolakanAnjuranMedis]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getSuratPenolakanAnjuranMedis()
    {
        return $this->hasMany(SuratPenolakanAnjuranMedis::class, ['kode_penolakan' => 'kode_penolakan']);
    }
}
