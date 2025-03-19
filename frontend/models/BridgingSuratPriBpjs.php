<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "bridging_surat_pri_bpjs".
 *
 * @property string|null $no_rawat
 * @property string|null $no_kartu
 * @property string $tgl_surat
 * @property string $no_surat
 * @property string|null $tgl_rencana
 * @property string|null $kd_dokter_bpjs
 * @property string|null $nm_dokter_bpjs
 * @property string|null $kd_poli_bpjs
 * @property string|null $nm_poli_bpjs
 * @property string $diagnosa
 * @property string $no_sep
 *
 * @property RegPeriksa $noRawat
 */
class BridgingSuratPriBpjs extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'bridging_surat_pri_bpjs';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['tgl_surat', 'no_surat', 'diagnosa', 'no_sep'], 'required'],
            [['tgl_surat', 'tgl_rencana'], 'safe'],
            [['no_rawat'], 'string', 'max' => 17],
            [['no_kartu'], 'string', 'max' => 25],
            [['no_surat', 'nm_poli_bpjs', 'no_sep'], 'string', 'max' => 40],
            [['kd_dokter_bpjs'], 'string', 'max' => 20],
            [['nm_dokter_bpjs'], 'string', 'max' => 50],
            [['kd_poli_bpjs'], 'string', 'max' => 15],
            [['diagnosa'], 'string', 'max' => 130],
            [['no_surat'], 'unique'],
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
            'no_kartu' => 'No Kartu',
            'tgl_surat' => 'Tgl Surat',
            'no_surat' => 'No Surat',
            'tgl_rencana' => 'Tgl Rencana',
            'kd_dokter_bpjs' => 'Kd Dokter Bpjs',
            'nm_dokter_bpjs' => 'Nm Dokter Bpjs',
            'kd_poli_bpjs' => 'Kd Poli Bpjs',
            'nm_poli_bpjs' => 'Nm Poli Bpjs',
            'diagnosa' => 'Diagnosa',
            'no_sep' => 'No Sep',
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
