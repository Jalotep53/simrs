<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "perawatan_corona".
 *
 * @property string $no_rawat
 * @property string|null $pemulasaraan_jenazah
 * @property string|null $kantong_jenazah
 * @property string|null $peti_jenazah
 * @property string|null $plastik_erat
 * @property string|null $desinfektan_jenazah
 * @property string|null $mobil_jenazah
 * @property string|null $desinfektan_mobil_jenazah
 * @property string|null $covid19_status_cd
 * @property string|null $nomor_kartu_t
 * @property int|null $episodes1
 * @property int|null $episodes2
 * @property int|null $episodes3
 * @property int|null $episodes4
 * @property int|null $episodes5
 * @property int|null $episodes6
 * @property string|null $covid19_cc_ind
 *
 * @property RegPeriksa $noRawat
 */
class PerawatanCorona extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'perawatan_corona';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['no_rawat'], 'required'],
            [['pemulasaraan_jenazah', 'kantong_jenazah', 'peti_jenazah', 'plastik_erat', 'desinfektan_jenazah', 'mobil_jenazah', 'desinfektan_mobil_jenazah', 'covid19_status_cd', 'covid19_cc_ind'], 'string'],
            [['episodes1', 'episodes2', 'episodes3', 'episodes4', 'episodes5', 'episodes6'], 'integer'],
            [['no_rawat'], 'string', 'max' => 17],
            [['nomor_kartu_t'], 'string', 'max' => 30],
            [['no_rawat'], 'unique'],
            [['no_rawat'], 'exist', 'skipOnError' => true, 'targetClass' => RegPeriksa::class, 'targetAttribute' => ['no_rawat' => 'no_rawat']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'no_rawat' => 'No Rawat',
            'pemulasaraan_jenazah' => 'Pemulasaraan Jenazah',
            'kantong_jenazah' => 'Kantong Jenazah',
            'peti_jenazah' => 'Peti Jenazah',
            'plastik_erat' => 'Plastik Erat',
            'desinfektan_jenazah' => 'Desinfektan Jenazah',
            'mobil_jenazah' => 'Mobil Jenazah',
            'desinfektan_mobil_jenazah' => 'Desinfektan Mobil Jenazah',
            'covid19_status_cd' => 'Covid19 Status Cd',
            'nomor_kartu_t' => 'Nomor Kartu T',
            'episodes1' => 'Episodes1',
            'episodes2' => 'Episodes2',
            'episodes3' => 'Episodes3',
            'episodes4' => 'Episodes4',
            'episodes5' => 'Episodes5',
            'episodes6' => 'Episodes6',
            'covid19_cc_ind' => 'Covid19 Cc Ind',
        ];
    }

    /**
     * Gets query for [[NoRawat]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getNoRawat()
    {
        return $this->hasOne(RegPeriksa::class, ['no_rawat' => 'no_rawat']);
    }
}
