<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "bridging_rujukan_bpjs_khusus_diagnosa".
 *
 * @property string $no_rujukan
 * @property string|null $status
 * @property string $kode_diagnosa
 * @property string|null $nama_diagnosa
 *
 * @property BridgingRujukanBpjs $noRujukan
 */
class BridgingRujukanBpjsKhususDiagnosa extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'bridging_rujukan_bpjs_khusus_diagnosa';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['no_rujukan', 'kode_diagnosa'], 'required'],
            [['status'], 'string'],
            [['no_rujukan'], 'string', 'max' => 40],
            [['kode_diagnosa'], 'string', 'max' => 10],
            [['nama_diagnosa'], 'string', 'max' => 400],
            [['no_rujukan', 'kode_diagnosa'], 'unique', 'targetAttribute' => ['no_rujukan', 'kode_diagnosa']],
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
            'status' => 'Status',
            'kode_diagnosa' => 'Kode Diagnosa',
            'nama_diagnosa' => 'Nama Diagnosa',
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
