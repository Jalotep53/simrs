<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "detail_piutang_pasien".
 *
 * @property string $no_rawat
 * @property string $nama_bayar
 * @property string|null $kd_pj
 * @property float|null $totalpiutang
 * @property float|null $sisapiutang
 * @property string|null $tgltempo
 *
 * @property Penjab $kdPj
 * @property AkunPiutang $namaBayar
 * @property RegPeriksa $noRawat
 */
class DetailPiutangPasien extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'detail_piutang_pasien';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['no_rawat', 'nama_bayar'], 'required'],
            [['totalpiutang', 'sisapiutang'], 'number'],
            [['tgltempo'], 'safe'],
            [['no_rawat'], 'string', 'max' => 17],
            [['nama_bayar'], 'string', 'max' => 50],
            [['kd_pj'], 'string', 'max' => 3],
            [['no_rawat', 'nama_bayar'], 'unique', 'targetAttribute' => ['no_rawat', 'nama_bayar']],
            [['kd_pj'], 'exist', 'skipOnError' => true, 'targetClass' => Penjab::class, 'targetAttribute' => ['kd_pj' => 'kd_pj']],
            [['nama_bayar'], 'exist', 'skipOnError' => true, 'targetClass' => AkunPiutang::class, 'targetAttribute' => ['nama_bayar' => 'nama_bayar']],
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
            'nama_bayar' => 'Nama Bayar',
            'kd_pj' => 'Kd Pj',
            'totalpiutang' => 'Totalpiutang',
            'sisapiutang' => 'Sisapiutang',
            'tgltempo' => 'Tgltempo',
        ];
    }

    /**
     * Gets query for [[KdPj]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getKdPj()
    {
        return $this->hasOne(Penjab::class, ['kd_pj' => 'kd_pj']);
    }

    /**
     * Gets query for [[NamaBayar]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getNamaBayar()
    {
        return $this->hasOne(AkunPiutang::class, ['nama_bayar' => 'nama_bayar']);
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
