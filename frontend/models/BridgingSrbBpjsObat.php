<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "bridging_srb_bpjs_obat".
 *
 * @property string|null $no_sep
 * @property string|null $no_srb
 * @property string|null $kd_obat
 * @property string|null $nm_obat
 * @property float|null $jumlah
 * @property string|null $signa1
 * @property string|null $signa2
 *
 * @property BridgingSep $noSep
 */
class BridgingSrbBpjsObat extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'bridging_srb_bpjs_obat';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['jumlah'], 'number'],
            [['no_sep'], 'string', 'max' => 40],
            [['no_srb'], 'string', 'max' => 10],
            [['kd_obat'], 'string', 'max' => 15],
            [['nm_obat'], 'string', 'max' => 80],
            [['signa1', 'signa2'], 'string', 'max' => 30],
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
            'no_srb' => 'No Srb',
            'kd_obat' => 'Kd Obat',
            'nm_obat' => 'Nm Obat',
            'jumlah' => 'Jumlah',
            'signa1' => 'Signa1',
            'signa2' => 'Signa2',
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
