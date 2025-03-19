<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "set_pjlab".
 *
 * @property string $kd_dokterlab
 * @property string $kd_dokterrad
 * @property string $kd_dokterhemodialisa
 * @property string|null $kd_dokterutd
 * @property string $kd_dokterlabpa
 * @property string $kd_dokterlabmb
 *
 * @property Dokter $kdDokterhemodialisa
 * @property Dokter $kdDokterlab
 * @property Dokter $kdDokterlabmb
 * @property Dokter $kdDokterlabpa
 * @property Dokter $kdDokterrad
 * @property Dokter $kdDokterutd
 */
class SetPjlab extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'set_pjlab';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['kd_dokterlab', 'kd_dokterrad', 'kd_dokterhemodialisa', 'kd_dokterlabpa', 'kd_dokterlabmb'], 'required'],
            [['kd_dokterlab', 'kd_dokterrad', 'kd_dokterhemodialisa', 'kd_dokterutd', 'kd_dokterlabpa', 'kd_dokterlabmb'], 'string', 'max' => 20],
            [['kd_dokterlab', 'kd_dokterrad', 'kd_dokterhemodialisa'], 'unique', 'targetAttribute' => ['kd_dokterlab', 'kd_dokterrad', 'kd_dokterhemodialisa']],
            [['kd_dokterlab'], 'exist', 'skipOnError' => true, 'targetClass' => Dokter::class, 'targetAttribute' => ['kd_dokterlab' => 'kd_dokter']],
            [['kd_dokterrad'], 'exist', 'skipOnError' => true, 'targetClass' => Dokter::class, 'targetAttribute' => ['kd_dokterrad' => 'kd_dokter']],
            [['kd_dokterhemodialisa'], 'exist', 'skipOnError' => true, 'targetClass' => Dokter::class, 'targetAttribute' => ['kd_dokterhemodialisa' => 'kd_dokter']],
            [['kd_dokterutd'], 'exist', 'skipOnError' => true, 'targetClass' => Dokter::class, 'targetAttribute' => ['kd_dokterutd' => 'kd_dokter']],
            [['kd_dokterlabpa'], 'exist', 'skipOnError' => true, 'targetClass' => Dokter::class, 'targetAttribute' => ['kd_dokterlabpa' => 'kd_dokter']],
            [['kd_dokterlabmb'], 'exist', 'skipOnError' => true, 'targetClass' => Dokter::class, 'targetAttribute' => ['kd_dokterlabmb' => 'kd_dokter']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'kd_dokterlab' => 'Kd Dokterlab',
            'kd_dokterrad' => 'Kd Dokterrad',
            'kd_dokterhemodialisa' => 'Kd Dokterhemodialisa',
            'kd_dokterutd' => 'Kd Dokterutd',
            'kd_dokterlabpa' => 'Kd Dokterlabpa',
            'kd_dokterlabmb' => 'Kd Dokterlabmb',
        ];
    }

    /**
     * Gets query for [[KdDokterhemodialisa]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getKdDokterhemodialisa()
    {
        return $this->hasOne(Dokter::class, ['kd_dokter' => 'kd_dokterhemodialisa']);
    }

    /**
     * Gets query for [[KdDokterlab]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getKdDokterlab()
    {
        return $this->hasOne(Dokter::class, ['kd_dokter' => 'kd_dokterlab']);
    }

    /**
     * Gets query for [[KdDokterlabmb]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getKdDokterlabmb()
    {
        return $this->hasOne(Dokter::class, ['kd_dokter' => 'kd_dokterlabmb']);
    }

    /**
     * Gets query for [[KdDokterlabpa]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getKdDokterlabpa()
    {
        return $this->hasOne(Dokter::class, ['kd_dokter' => 'kd_dokterlabpa']);
    }

    /**
     * Gets query for [[KdDokterrad]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getKdDokterrad()
    {
        return $this->hasOne(Dokter::class, ['kd_dokter' => 'kd_dokterrad']);
    }

    /**
     * Gets query for [[KdDokterutd]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getKdDokterutd()
    {
        return $this->hasOne(Dokter::class, ['kd_dokter' => 'kd_dokterutd']);
    }
}
