<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "jurnal".
 *
 * @property string $no_jurnal
 * @property string|null $no_bukti
 * @property string|null $tgl_jurnal
 * @property string $jam_jurnal
 * @property string|null $jenis
 * @property string|null $keterangan
 *
 * @property Detailjurnal[] $detailjurnals
 */
class Jurnal extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'jurnal';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['no_jurnal', 'jam_jurnal'], 'required'],
            [['tgl_jurnal', 'jam_jurnal'], 'safe'],
            [['jenis'], 'string'],
            [['no_jurnal'], 'string', 'max' => 20],
            [['no_bukti'], 'string', 'max' => 30],
            [['keterangan'], 'string', 'max' => 350],
            [['no_jurnal'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'no_jurnal' => 'No Jurnal',
            'no_bukti' => 'No Bukti',
            'tgl_jurnal' => 'Tgl Jurnal',
            'jam_jurnal' => 'Jam Jurnal',
            'jenis' => 'Jenis',
            'keterangan' => 'Keterangan',
        ];
    }

    /**
     * Gets query for [[Detailjurnals]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getDetailjurnals()
    {
        return $this->hasMany(Detailjurnal::class, ['no_jurnal' => 'no_jurnal']);
    }
}
