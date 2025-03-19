<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "satu_sehat_mapping_lab".
 *
 * @property int $id_template
 * @property string|null $code
 * @property string $system
 * @property string|null $display
 * @property string $sampel_code
 * @property string $sampel_system
 * @property string $sampel_display
 *
 * @property TemplateLaboratorium $template
 */
class SatuSehatMappingLab extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'satu_sehat_mapping_lab';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_template', 'system', 'sampel_code', 'sampel_system', 'sampel_display'], 'required'],
            [['id_template'], 'integer'],
            [['code', 'sampel_code'], 'string', 'max' => 15],
            [['system', 'sampel_system'], 'string', 'max' => 100],
            [['display', 'sampel_display'], 'string', 'max' => 80],
            [['id_template'], 'unique'],
            [['id_template'], 'exist', 'skipOnError' => true, 'targetClass' => TemplateLaboratorium::class, 'targetAttribute' => ['id_template' => 'id_template']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_template' => 'Id Template',
            'code' => 'Code',
            'system' => 'System',
            'display' => 'Display',
            'sampel_code' => 'Sampel Code',
            'sampel_system' => 'Sampel System',
            'sampel_display' => 'Sampel Display',
        ];
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
