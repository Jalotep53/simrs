<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "detailjurnal".
 *
 * @property string|null $no_jurnal
 * @property string|null $kd_rek
 * @property float|null $debet
 * @property float|null $kredit
 *
 * @property Rekening $kdRek
 * @property Jurnal $noJurnal
 */
class Detailjurnal extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'detailjurnal';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['debet', 'kredit'], 'number'],
            [['no_jurnal'], 'string', 'max' => 20],
            [['kd_rek'], 'string', 'max' => 15],
            [['no_jurnal'], 'exist', 'skipOnError' => true, 'targetClass' => Jurnal::class, 'targetAttribute' => ['no_jurnal' => 'no_jurnal']],
            [['kd_rek'], 'exist', 'skipOnError' => true, 'targetClass' => Rekening::class, 'targetAttribute' => ['kd_rek' => 'kd_rek']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'no_jurnal' => 'No Jurnal',
            'kd_rek' => 'Kd Rek',
            'debet' => 'Debet',
            'kredit' => 'Kredit',
        ];
    }

    /**
     * Gets query for [[KdRek]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getKdRek()
    {
        return $this->hasOne(Rekening::class, ['kd_rek' => 'kd_rek']);
    }

    /**
     * Gets query for [[NoJurnal]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getNoJurnal()
    {
        return $this->hasOne(Jurnal::class, ['no_jurnal' => 'no_jurnal']);
    }
}
