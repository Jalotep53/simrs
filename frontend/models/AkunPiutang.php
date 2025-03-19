<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "akun_piutang".
 *
 * @property string $nama_bayar
 * @property string|null $kd_rek
 * @property string|null $kd_pj
 *
 * @property DetailPiutangPasien[] $detailPiutangPasiens
 * @property Penjab $kdPj
 * @property Rekening $kdRek
 * @property RegPeriksa[] $noRawats
 */
class AkunPiutang extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'akun_piutang';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nama_bayar'], 'required'],
            [['nama_bayar'], 'string', 'max' => 50],
            [['kd_rek'], 'string', 'max' => 15],
            [['kd_pj'], 'string', 'max' => 3],
            [['kd_rek', 'kd_pj'], 'unique', 'targetAttribute' => ['kd_rek', 'kd_pj']],
            [['nama_bayar'], 'unique'],
            [['kd_rek'], 'exist', 'skipOnError' => true, 'targetClass' => Rekening::class, 'targetAttribute' => ['kd_rek' => 'kd_rek']],
            [['kd_pj'], 'exist', 'skipOnError' => true, 'targetClass' => Penjab::class, 'targetAttribute' => ['kd_pj' => 'kd_pj']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'nama_bayar' => 'Nama Bayar',
            'kd_rek' => 'Kd Rek',
            'kd_pj' => 'Kd Pj',
        ];
    }

    /**
     * Gets query for [[DetailPiutangPasiens]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getDetailPiutangPasiens()
    {
        return $this->hasMany(DetailPiutangPasien::class, ['nama_bayar' => 'nama_bayar']);
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
     * Gets query for [[KdRek]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getKdRek()
    {
        return $this->hasOne(Rekening::class, ['kd_rek' => 'kd_rek']);
    }

    /**
     * Gets query for [[NoRawats]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getNoRawats()
    {
        return $this->hasMany(RegPeriksa::class, ['no_rawat' => 'no_rawat'])->viaTable('detail_piutang_pasien', ['nama_bayar' => 'nama_bayar']);
    }
}
