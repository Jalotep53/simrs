<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "bridging_rujukan_bpjs_khusus_prosedur".
 *
 * @property string $no_rujukan
 * @property string $kode_prosedur
 * @property string|null $nama_prosedur
 *
 * @property BridgingRujukanBpjs $noRujukan
 */
class BridgingRujukanBpjsKhususProsedur extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'bridging_rujukan_bpjs_khusus_prosedur';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['no_rujukan', 'kode_prosedur'], 'required'],
            [['no_rujukan'], 'string', 'max' => 40],
            [['kode_prosedur'], 'string', 'max' => 10],
            [['nama_prosedur'], 'string', 'max' => 400],
            [['no_rujukan', 'kode_prosedur'], 'unique', 'targetAttribute' => ['no_rujukan', 'kode_prosedur']],
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
            'kode_prosedur' => 'Kode Prosedur',
            'nama_prosedur' => 'Nama Prosedur',
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
