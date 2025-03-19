<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "utd_detail_pemisahan_komponen".
 *
 * @property string|null $no_donor
 * @property string $no_kantong
 * @property string|null $kode_komponen
 * @property string|null $tanggal_kadaluarsa
 *
 * @property UtdPemisahanKomponen $noDonor
 */
class UtdDetailPemisahanKomponen extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'utd_detail_pemisahan_komponen';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['no_kantong'], 'required'],
            [['tanggal_kadaluarsa'], 'safe'],
            [['no_donor'], 'string', 'max' => 15],
            [['no_kantong'], 'string', 'max' => 20],
            [['kode_komponen'], 'string', 'max' => 5],
            [['no_kantong'], 'unique'],
            [['no_donor'], 'exist', 'skipOnError' => true, 'targetClass' => UtdPemisahanKomponen::class, 'targetAttribute' => ['no_donor' => 'no_donor']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'no_donor' => 'No Donor',
            'no_kantong' => 'No Kantong',
            'kode_komponen' => 'Kode Komponen',
            'tanggal_kadaluarsa' => 'Tanggal Kadaluarsa',
        ];
    }

    /**
     * Gets query for [[NoDonor]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getNoDonor()
    {
        return $this->hasOne(UtdPemisahanKomponen::class, ['no_donor' => 'no_donor']);
    }
}
