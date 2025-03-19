<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "inacbg_grouping_stage1".
 *
 * @property string $no_sep
 * @property string|null $code_cbg
 * @property string|null $deskripsi
 * @property float|null $tarif
 *
 * @property BridgingSep $noSep
 */
class InacbgGroupingStage1 extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'inacbg_grouping_stage1';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['no_sep'], 'required'],
            [['tarif'], 'number'],
            [['no_sep'], 'string', 'max' => 40],
            [['code_cbg'], 'string', 'max' => 10],
            [['deskripsi'], 'string', 'max' => 200],
            [['no_sep'], 'unique'],
            [['no_sep'], 'exist', 'skipOnError' => true, 'targetClass' => BridgingSep::class, 'targetAttribute' => ['no_sep' => 'no_sep']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'no_sep' => 'No Sep',
            'code_cbg' => 'Code Cbg',
            'deskripsi' => 'Deskripsi',
            'tarif' => 'Tarif',
        ];
    }

    /**
     * Gets query for [[NoSep]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getNoSep()
    {
        return $this->hasOne(BridgingSep::class, ['no_sep' => 'no_sep']);
    }
}
