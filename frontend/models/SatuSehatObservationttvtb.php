<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "satu_sehat_observationttvtb".
 *
 * @property string $no_rawat
 * @property string $tgl_perawatan
 * @property string $jam_rawat
 * @property string $status
 * @property string|null $id_observation
 *
 * @property RegPeriksa $noRawat
 */
class SatuSehatObservationttvtb extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'satu_sehat_observationttvtb';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['no_rawat', 'tgl_perawatan', 'jam_rawat', 'status'], 'required'],
            [['tgl_perawatan', 'jam_rawat'], 'safe'],
            [['status'], 'string'],
            [['no_rawat'], 'string', 'max' => 17],
            [['id_observation'], 'string', 'max' => 40],
            [['no_rawat', 'tgl_perawatan', 'jam_rawat', 'status'], 'unique', 'targetAttribute' => ['no_rawat', 'tgl_perawatan', 'jam_rawat', 'status']],
            [['no_rawat'], 'exist', 'skipOnError' => true, 'targetClass' => RegPeriksa::class, 'targetAttribute' => ['no_rawat' => 'no_rawat']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'no_rawat' => 'No Rawat',
            'tgl_perawatan' => 'Tgl Perawatan',
            'jam_rawat' => 'Jam Rawat',
            'status' => 'Status',
            'id_observation' => 'Id Observation',
        ];
    }

    /**
     * Gets query for [[NoRawat]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getNoRawat()
    {
        return $this->hasOne(RegPeriksa::class, ['no_rawat' => 'no_rawat']);
    }
}
