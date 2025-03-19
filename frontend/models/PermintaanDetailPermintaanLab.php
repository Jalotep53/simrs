<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "permintaan_detail_permintaan_lab".
 *
 * @property string $noorder
 * @property string $kd_jenis_prw
 * @property int $id_template
 * @property string|null $stts_bayar
 *
 * @property JnsPerawatanLab $kdJenisPrw
 * @property PermintaanLab $noorder0
 * @property TemplateLaboratorium $template
 */
class PermintaanDetailPermintaanLab extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'permintaan_detail_permintaan_lab';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['noorder', 'kd_jenis_prw', 'id_template'], 'required'],
            [['id_template'], 'integer'],
            [['stts_bayar'], 'string'],
            [['noorder', 'kd_jenis_prw'], 'string', 'max' => 15],
            [['noorder', 'kd_jenis_prw', 'id_template'], 'unique', 'targetAttribute' => ['noorder', 'kd_jenis_prw', 'id_template']],
            [['kd_jenis_prw'], 'exist', 'skipOnError' => true, 'targetClass' => JnsPerawatanLab::class, 'targetAttribute' => ['kd_jenis_prw' => 'kd_jenis_prw']],
            [['id_template'], 'exist', 'skipOnError' => true, 'targetClass' => TemplateLaboratorium::class, 'targetAttribute' => ['id_template' => 'id_template']],
            [['noorder'], 'exist', 'skipOnError' => true, 'targetClass' => PermintaanLab::class, 'targetAttribute' => ['noorder' => 'noorder']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'noorder' => 'Noorder',
            'kd_jenis_prw' => 'Kd Jenis Prw',
            'id_template' => 'Id Template',
            'stts_bayar' => 'Stts Bayar',
        ];
    }

    /**
     * Gets query for [[KdJenisPrw]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getKdJenisPrw()
    {
        return $this->hasOne(JnsPerawatanLab::class, ['kd_jenis_prw' => 'kd_jenis_prw']);
    }

    /**
     * Gets query for [[Noorder0]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getNoorder0()
    {
        return $this->hasOne(PermintaanLab::class, ['noorder' => 'noorder']);
    }

    /**
     * Gets query for [[Template]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getTemplate()
    {
        return $this->hasOne(TemplateLaboratorium::class, ['id_template' => 'id_template']);
    }
}
