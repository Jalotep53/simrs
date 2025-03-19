<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "audit_bundle_ido".
 *
 * @property string $tanggal
 * @property string $id_ruang
 * @property string|null $pencukuran_rambut
 * @property string|null $antibiotik
 * @property string|null $temperature
 * @property string|null $sugar
 *
 * @property RuangAuditKepatuhan $ruang
 */
class AuditBundleIdo extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'audit_bundle_ido';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['tanggal', 'id_ruang'], 'required'],
            [['tanggal'], 'safe'],
            [['pencukuran_rambut', 'antibiotik', 'temperature', 'sugar'], 'string'],
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
            'pencukuran_rambut' => 'Pencukuran Rambut',
            'antibiotik' => 'Antibiotik',
            'temperature' => 'Temperature',
            'sugar' => 'Sugar',
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
