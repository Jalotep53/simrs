<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "utd_pemisahan_komponen".
 *
 * @property string $no_donor
 * @property string|null $tanggal
 * @property string|null $dinas
 * @property string|null $nip
 *
 * @property Databarang[] $kodeBrngs
 * @property Ipsrsbarang[] $kodeBrngs0
 * @property Petugas $nip0
 * @property UtdDonor $noDonor
 * @property UtdDetailPemisahanKomponen[] $utdDetailPemisahanKomponens
 * @property UtdPenggunaanMedisPemisahanKomponen[] $utdPenggunaanMedisPemisahanKomponens
 * @property UtdPenggunaanPenunjangPemisahanKomponen[] $utdPenggunaanPenunjangPemisahanKomponens
 */
class UtdPemisahanKomponen extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'utd_pemisahan_komponen';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['no_donor'], 'required'],
            [['tanggal'], 'safe'],
            [['dinas'], 'string'],
            [['no_donor'], 'string', 'max' => 15],
            [['nip'], 'string', 'max' => 20],
            [['no_donor'], 'unique'],
            [['no_donor'], 'exist', 'skipOnError' => true, 'targetClass' => UtdDonor::class, 'targetAttribute' => ['no_donor' => 'no_donor']],
            [['nip'], 'exist', 'skipOnError' => true, 'targetClass' => Petugas::class, 'targetAttribute' => ['nip' => 'nip']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'no_donor' => 'No Donor',
            'tanggal' => 'Tanggal',
            'dinas' => 'Dinas',
            'nip' => 'Nip',
        ];
    }

    /**
     * Gets query for [[KodeBrngs]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getKodeBrngs()
    {
        return $this->hasMany(Databarang::class, ['kode_brng' => 'kode_brng'])->viaTable('utd_penggunaan_medis_pemisahan_komponen', ['no_donor' => 'no_donor']);
    }

    /**
     * Gets query for [[KodeBrngs0]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getKodeBrngs0()
    {
        return $this->hasMany(Ipsrsbarang::class, ['kode_brng' => 'kode_brng'])->viaTable('utd_penggunaan_penunjang_pemisahan_komponen', ['no_donor' => 'no_donor']);
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

    /**
     * Gets query for [[NoDonor]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getNoDonor()
    {
        return $this->hasOne(UtdDonor::class, ['no_donor' => 'no_donor']);
    }

    /**
     * Gets query for [[UtdDetailPemisahanKomponens]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getUtdDetailPemisahanKomponens()
    {
        return $this->hasMany(UtdDetailPemisahanKomponen::class, ['no_donor' => 'no_donor']);
    }

    /**
     * Gets query for [[UtdPenggunaanMedisPemisahanKomponens]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getUtdPenggunaanMedisPemisahanKomponens()
    {
        return $this->hasMany(UtdPenggunaanMedisPemisahanKomponen::class, ['no_donor' => 'no_donor']);
    }

    /**
     * Gets query for [[UtdPenggunaanPenunjangPemisahanKomponens]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getUtdPenggunaanPenunjangPemisahanKomponens()
    {
        return $this->hasMany(UtdPenggunaanPenunjangPemisahanKomponen::class, ['no_donor' => 'no_donor']);
    }
}
