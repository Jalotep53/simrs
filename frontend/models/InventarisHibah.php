<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "inventaris_hibah".
 *
 * @property string $no_hibah
 * @property string|null $kode_pemberi
 * @property string|null $nip
 * @property string|null $tgl_hibah
 * @property float $totalhibah
 * @property string|null $kd_rek_aset
 *
 * @property InventarisDetailHibah[] $inventarisDetailHibahs
 * @property Rekening $kdRekAset
 * @property InventarisBarang[] $kodeBarangs
 * @property Pemberihibah $kodePemberi
 * @property Petugas $nip0
 */
class InventarisHibah extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'inventaris_hibah';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['no_hibah', 'totalhibah'], 'required'],
            [['tgl_hibah'], 'safe'],
            [['totalhibah'], 'number'],
            [['no_hibah', 'nip'], 'string', 'max' => 20],
            [['kode_pemberi'], 'string', 'max' => 5],
            [['kd_rek_aset'], 'string', 'max' => 15],
            [['no_hibah'], 'unique'],
            [['kode_pemberi'], 'exist', 'skipOnError' => true, 'targetClass' => Pemberihibah::class, 'targetAttribute' => ['kode_pemberi' => 'kode_pemberi']],
            [['nip'], 'exist', 'skipOnError' => true, 'targetClass' => Petugas::class, 'targetAttribute' => ['nip' => 'nip']],
            [['kd_rek_aset'], 'exist', 'skipOnError' => true, 'targetClass' => Rekening::class, 'targetAttribute' => ['kd_rek_aset' => 'kd_rek']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'no_hibah' => 'No Hibah',
            'kode_pemberi' => 'Kode Pemberi',
            'nip' => 'Nip',
            'tgl_hibah' => 'Tgl Hibah',
            'totalhibah' => 'Totalhibah',
            'kd_rek_aset' => 'Kd Rek Aset',
        ];
    }

    /**
     * Gets query for [[InventarisDetailHibahs]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getInventarisDetailHibahs()
    {
        return $this->hasMany(InventarisDetailHibah::class, ['no_hibah' => 'no_hibah']);
    }

    /**
     * Gets query for [[KdRekAset]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getKdRekAset()
    {
        return $this->hasOne(Rekening::class, ['kd_rek' => 'kd_rek_aset']);
    }

    /**
     * Gets query for [[KodeBarangs]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getKodeBarangs()
    {
        return $this->hasMany(InventarisBarang::class, ['kode_barang' => 'kode_barang'])->viaTable('inventaris_detail_hibah', ['no_hibah' => 'no_hibah']);
    }

    /**
     * Gets query for [[KodePemberi]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getKodePemberi()
    {
        return $this->hasOne(Pemberihibah::class, ['kode_pemberi' => 'kode_pemberi']);
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
