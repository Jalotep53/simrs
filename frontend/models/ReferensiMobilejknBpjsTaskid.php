<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "referensi_mobilejkn_bpjs_taskid".
 *
 * @property string $no_rawat
 * @property string $taskid
 * @property string|null $waktu
 *
 * @property RegPeriksa $noRawat
 */
class ReferensiMobilejknBpjsTaskid extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'referensi_mobilejkn_bpjs_taskid';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['no_rawat', 'taskid'], 'required'],
            [['taskid'], 'string'],
            [['waktu'], 'safe'],
            [['no_rawat'], 'string', 'max' => 17],
            [['no_rawat', 'taskid'], 'unique', 'targetAttribute' => ['no_rawat', 'taskid']],
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
            'taskid' => 'Taskid',
            'waktu' => 'Waktu',
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
