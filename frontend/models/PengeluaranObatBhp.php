<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "pengeluaran_obat_bhp".
 *
 * @property string $no_keluar
 * @property string $tanggal
 * @property string $nip
 * @property string $keterangan
 * @property string|null $kd_bangsal
 *
 * @property DetailPengeluaranObatBhp[] $detailPengeluaranObatBhps
 * @property Bangsal $kdBangsal
 * @property Databarang[] $kodeBrngs
 * @property Petugas $nip0
 */
class PengeluaranObatBhp extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'pengeluaran_obat_bhp';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['no_keluar', 'tanggal', 'nip', 'keterangan'], 'required'],
            [['tanggal'], 'safe'],
            [['no_keluar'], 'string', 'max' => 15],
            [['nip'], 'string', 'max' => 20],
            [['keterangan'], 'string', 'max' => 200],
            [['kd_bangsal'], 'string', 'max' => 5],
            [['no_keluar'], 'unique'],
            [['nip'], 'exist', 'skipOnError' => true, 'targetClass' => Petugas::class, 'targetAttribute' => ['nip' => 'nip']],
            [['kd_bangsal'], 'exist', 'skipOnError' => true, 'targetClass' => Bangsal::class, 'targetAttribute' => ['kd_bangsal' => 'kd_bangsal']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'no_keluar' => 'No Keluar',
            'tanggal' => 'Tanggal',
            'nip' => 'Nip',
            'keterangan' => 'Keterangan',
            'kd_bangsal' => 'Kd Bangsal',
        ];
    }

    /**
     * Gets query for [[DetailPengeluaranObatBhps]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getDetailPengeluaranObatBhps()
    {
        return $this->hasMany(DetailPengeluaranObatBhp::class, ['no_keluar' => 'no_keluar']);
    }

    /**
     * Gets query for [[KdBangsal]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getKdBangsal()
    {
        return $this->hasOne(Bangsal::class, ['kd_bangsal' => 'kd_bangsal']);
    }

    /**
     * Gets query for [[KodeBrngs]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getKodeBrngs()
    {
        return $this->hasMany(Databarang::class, ['kode_brng' => 'kode_brng'])->viaTable('detail_pengeluaran_obat_bhp', ['no_keluar' => 'no_keluar']);
    }

    /**
     * Gets query for [[Nip0]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getNip0()
    {
        return $this->hasOne(Petugas::class, ['nip' => 'nip']);
    }
}
