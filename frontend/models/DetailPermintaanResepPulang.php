<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "detail_permintaan_resep_pulang".
 *
 * @property string|null $no_permintaan
 * @property string|null $kode_brng
 * @property float|null $jml
 * @property string|null $dosis
 *
 * @property Databarang $kodeBrng
 * @property PermintaanResepPulang $noPermintaan
 */
class DetailPermintaanResepPulang extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'detail_permintaan_resep_pulang';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['jml'], 'number'],
            [['no_permintaan'], 'string', 'max' => 14],
            [['kode_brng'], 'string', 'max' => 15],
            [['dosis'], 'string', 'max' => 150],
            [['no_permintaan'], 'exist', 'skipOnError' => true, 'targetClass' => PermintaanResepPulang::class, 'targetAttribute' => ['no_permintaan' => 'no_permintaan']],
            [['kode_brng'], 'exist', 'skipOnError' => true, 'targetClass' => Databarang::class, 'targetAttribute' => ['kode_brng' => 'kode_brng']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'no_permintaan' => 'No Permintaan',
            'kode_brng' => 'Kode Brng',
            'jml' => 'Jml',
            'dosis' => 'Dosis',
        ];
    }

    /**
     * Gets query for [[KodeBrng]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getKodeBrng()
    {
        return $this->hasOne(Databarang::class, ['kode_brng' => 'kode_brng']);
    }

    /**
     * Gets query for [[NoPermintaan]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getNoPermintaan()
    {
        return $this->hasOne(PermintaanResepPulang::class, ['no_permintaan' => 'no_permintaan']);
    }
}
