<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "penagihan_piutang".
 *
 * @property string $no_tagihan
 * @property string $tanggal
 * @property string $tanggaltempo
 * @property int $tempo
 * @property string $nip
 * @property string $nip_menyetujui
 * @property string $kd_pj
 * @property string $catatan
 * @property string $kd_rek
 * @property string $status
 *
 * @property BuktiPenagihanPiutang $buktiPenagihanPiutang
 * @property DetailPenagihanPiutang[] $detailPenagihanPiutangs
 * @property Penjab $kdPj
 * @property Rekening $kdRek
 * @property Pegawai $nip0
 * @property Pegawai $nipMenyetujui
 * @property RegPeriksa[] $noRawats
 */
class PenagihanPiutang extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'penagihan_piutang';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['no_tagihan', 'tanggal', 'tanggaltempo', 'tempo', 'nip', 'nip_menyetujui', 'kd_pj', 'catatan', 'kd_rek', 'status'], 'required'],
            [['tanggal', 'tanggaltempo'], 'safe'],
            [['tempo'], 'integer'],
            [['status'], 'string'],
            [['no_tagihan'], 'string', 'max' => 17],
            [['nip', 'nip_menyetujui'], 'string', 'max' => 20],
            [['kd_pj'], 'string', 'max' => 3],
            [['catatan'], 'string', 'max' => 100],
            [['kd_rek'], 'string', 'max' => 15],
            [['no_tagihan'], 'unique'],
            [['nip'], 'exist', 'skipOnError' => true, 'targetClass' => Pegawai::class, 'targetAttribute' => ['nip' => 'nik']],
            [['kd_pj'], 'exist', 'skipOnError' => true, 'targetClass' => Penjab::class, 'targetAttribute' => ['kd_pj' => 'kd_pj']],
            [['kd_rek'], 'exist', 'skipOnError' => true, 'targetClass' => Rekening::class, 'targetAttribute' => ['kd_rek' => 'kd_rek']],
            [['nip_menyetujui'], 'exist', 'skipOnError' => true, 'targetClass' => Pegawai::class, 'targetAttribute' => ['nip_menyetujui' => 'nik']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'no_tagihan' => 'No Tagihan',
            'tanggal' => 'Tanggal',
            'tanggaltempo' => 'Tanggaltempo',
            'tempo' => 'Tempo',
            'nip' => 'Nip',
            'nip_menyetujui' => 'Nip Menyetujui',
            'kd_pj' => 'Kd Pj',
            'catatan' => 'Catatan',
            'kd_rek' => 'Kd Rek',
            'status' => 'Status',
        ];
    }

    /**
     * Gets query for [[BuktiPenagihanPiutang]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getBuktiPenagihanPiutang()
    {
        return $this->hasOne(BuktiPenagihanPiutang::class, ['no_tagihan' => 'no_tagihan']);
    }

    /**
     * Gets query for [[DetailPenagihanPiutangs]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getDetailPenagihanPiutangs()
    {
        return $this->hasMany(DetailPenagihanPiutang::class, ['no_tagihan' => 'no_tagihan']);
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
     * Gets query for [[Nip0]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getNip0()
    {
        return $this->hasOne(Pegawai::class, ['nik' => 'nip']);
    }

    /**
     * Gets query for [[NipMenyetujui]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getNipMenyetujui()
    {
        return $this->hasOne(Pegawai::class, ['nik' => 'nip_menyetujui']);
    }

    /**
     * Gets query for [[NoRawats]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getNoRawats()
    {
        return $this->hasMany(RegPeriksa::class, ['no_rawat' => 'no_rawat'])->viaTable('detail_penagihan_piutang', ['no_tagihan' => 'no_tagihan']);
    }
}
