<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "bridging_surat_kontrol_bpjs".
 *
 * @property string|null $no_sep
 * @property string $tgl_surat
 * @property string $no_surat
 * @property string|null $tgl_rencana
 * @property string|null $kd_dokter_bpjs
 * @property string|null $nm_dokter_bpjs
 * @property string|null $kd_poli_bpjs
 * @property string|null $nm_poli_bpjs
 *
 * @property BridgingSep $noSep
 */
class BridgingSuratKontrolBpjs extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'bridging_surat_kontrol_bpjs';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['tgl_surat', 'no_surat'], 'required'],
            [['tgl_surat', 'tgl_rencana'], 'safe'],
            [['no_sep', 'no_surat', 'nm_poli_bpjs'], 'string', 'max' => 40],
            [['kd_dokter_bpjs'], 'string', 'max' => 20],
            [['nm_dokter_bpjs'], 'string', 'max' => 50],
            [['kd_poli_bpjs'], 'string', 'max' => 15],
            [['no_surat'], 'unique'],
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
            'tgl_surat' => 'Tgl Surat',
            'no_surat' => 'No Surat',
            'tgl_rencana' => 'Tgl Rencana',
            'kd_dokter_bpjs' => 'Kd Dokter Bpjs',
            'nm_dokter_bpjs' => 'Nm Dokter Bpjs',
            'kd_poli_bpjs' => 'Kd Poli Bpjs',
            'nm_poli_bpjs' => 'Nm Poli Bpjs',
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
