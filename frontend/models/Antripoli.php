<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "antripoli".
 *
 * @property string|null $kd_dokter
 * @property string|null $kd_poli
 * @property string|null $status
 * @property string $no_rawat
 */
class Antripoli extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'antripoli';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['status'], 'string'],
            [['no_rawat'], 'required'],
            [['kd_dokter'], 'string', 'max' => 20],
            [['kd_poli'], 'string', 'max' => 5],
            [['no_rawat'], 'string', 'max' => 17],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'kd_dokter' => 'Kd Dokter',
            'kd_poli' => 'Kd Poli',
            'status' => 'Status',
            'no_rawat' => 'No Rawat',
        ];
    }
}
