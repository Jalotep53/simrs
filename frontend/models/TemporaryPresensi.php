<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "temporary_presensi".
 *
 * @property int $id
 * @property string $shift
 * @property string|null $jam_datang
 * @property string|null $jam_pulang
 * @property string $status
 * @property string $keterlambatan
 * @property string|null $durasi
 * @property string $photo
 *
 * @property Pegawai $id0
 */
class TemporaryPresensi extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'temporary_presensi';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'shift', 'status', 'keterlambatan', 'photo'], 'required'],
            [['id'], 'integer'],
            [['shift', 'status'], 'string'],
            [['jam_datang', 'jam_pulang'], 'safe'],
            [['keterlambatan', 'durasi'], 'string', 'max' => 20],
            [['photo'], 'string', 'max' => 500],
            [['id'], 'unique'],
            [['id'], 'exist', 'skipOnError' => true, 'targetClass' => Pegawai::class, 'targetAttribute' => ['id' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'shift' => 'Shift',
            'jam_datang' => 'Jam Datang',
            'jam_pulang' => 'Jam Pulang',
            'status' => 'Status',
            'keterlambatan' => 'Keterlambatan',
            'durasi' => 'Durasi',
            'photo' => 'Photo',
        ];
    }

    /**
     * Gets query for [[Id0]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getId0()
    {
        return $this->hasOne(Pegawai::class, ['id' => 'id']);
    }
}
