<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "audit_kamar_jenazah".
 *
 * @property string $tanggal
 * @property string|null $audit1
 * @property string|null $audit2
 * @property string|null $audit3
 * @property string|null $audit4
 * @property string|null $audit5
 * @property string|null $audit6
 * @property string|null $audit7
 * @property string|null $audit8
 */
class AuditKamarJenazah extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'audit_kamar_jenazah';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['tanggal'], 'required'],
            [['tanggal'], 'safe'],
            [['audit1', 'audit2', 'audit3', 'audit4', 'audit5', 'audit6', 'audit7', 'audit8'], 'string'],
            [['tanggal'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'tanggal' => 'Tanggal',
            'audit1' => 'Audit1',
            'audit2' => 'Audit2',
            'audit3' => 'Audit3',
            'audit4' => 'Audit4',
            'audit5' => 'Audit5',
            'audit6' => 'Audit6',
            'audit7' => 'Audit7',
            'audit8' => 'Audit8',
        ];
    }
}
