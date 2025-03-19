<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "bridging_rujukan_bpjs_khusus".
 *
 * @property string $no_rujukan
 * @property string|null $nokapst
 * @property string|null $nmpst
 * @property string|null $tglrujukan_awal
 * @property string|null $tglrujukan_berakhir
 *
 * @property BridgingRujukanBpjs $noRujukan
 */
class BridgingRujukanBpjsKhusus extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'bridging_rujukan_bpjs_khusus';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['no_rujukan'], 'required'],
            [['tglrujukan_awal', 'tglrujukan_berakhir'], 'safe'],
            [['no_rujukan'], 'string', 'max' => 40],
            [['nokapst'], 'string', 'max' => 25],
            [['nmpst'], 'string', 'max' => 100],
            [['no_rujukan'], 'unique'],
            [['no_rujukan'], 'exist', 'skipOnError' => true, 'targetClass' => BridgingRujukanBpjs::class, 'targetAttribute' => ['no_rujukan' => 'no_rujukan']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'no_rujukan' => 'No Rujukan',
            'nokapst' => 'Nokapst',
            'nmpst' => 'Nmpst',
            'tglrujukan_awal' => 'Tglrujukan Awal',
            'tglrujukan_berakhir' => 'Tglrujukan Berakhir',
        ];
    }

    /**
     * Gets query for [[NoRujukan]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getNoRujukan()
    {
        return $this->hasOne(BridgingRujukanBpjs::class, ['no_rujukan' => 'no_rujukan']);
    }
}
