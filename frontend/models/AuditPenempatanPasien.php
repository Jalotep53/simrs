<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "audit_penempatan_pasien".
 *
 * @property string $tanggal
 * @property string $id_ruang
 * @property string|null $audit1
 * @property string|null $audit2
 * @property string|null $audit3
 * @property string|null $audit4
 * @property string|null $audit5
 * @property string|null $audit6
 * @property string|null $audit7
 * @property string|null $audit8
 * @property string|null $audit9
 *
 * @property RuangAuditKepatuhan $ruang
 */
class AuditPenempatanPasien extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'audit_penempatan_pasien';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['tanggal', 'id_ruang'], 'required'],
            [['tanggal'], 'safe'],
            [['audit1', 'audit2', 'audit3', 'audit4', 'audit5', 'audit6', 'audit7', 'audit8', 'audit9'], 'string'],
            [['id_ruang'], 'string', 'max' => 5],
            [['tanggal', 'id_ruang'], 'unique', 'targetAttribute' => ['tanggal', 'id_ruang']],
            [['id_ruang'], 'exist', 'skipOnError' => true, 'targetClass' => RuangAuditKepatuhan::class, 'targetAttribute' => ['id_ruang' => 'id_ruang']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'tanggal' => 'Tanggal',
            'id_ruang' => 'Id Ruang',
            'audit1' => 'Audit1',
            'audit2' => 'Audit2',
            'audit3' => 'Audit3',
            'audit4' => 'Audit4',
            'audit5' => 'Audit5',
            'audit6' => 'Audit6',
            'audit7' => 'Audit7',
            'audit8' => 'Audit8',
            'audit9' => 'Audit9',
        ];
    }

    /**
     * Gets query for [[Ruang]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getRuang()
    {
        return $this->hasOne(RuangAuditKepatuhan::class, ['id_ruang' => 'id_ruang']);
    }
}
