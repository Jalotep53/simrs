<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "peminjaman_berkas".
 *
 * @property string $peminjam
 * @property string $id_ruang
 * @property string $no_rkm_medis
 * @property string $tgl_pinjam
 * @property string $tgl_kembali
 * @property string $nip
 * @property string $status_pinjam
 *
 * @property Petugas $nip0
 * @property Pasien $noRkmMedis
 * @property InventarisRuang $ruang
 */
class PeminjamanBerkas extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'peminjaman_berkas';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['peminjam', 'id_ruang', 'no_rkm_medis', 'tgl_pinjam', 'tgl_kembali', 'nip', 'status_pinjam'], 'required'],
            [['tgl_pinjam', 'tgl_kembali'], 'safe'],
            [['status_pinjam'], 'string'],
            [['peminjam'], 'string', 'max' => 60],
            [['id_ruang'], 'string', 'max' => 5],
            [['no_rkm_medis'], 'string', 'max' => 15],
            [['nip'], 'string', 'max' => 20],
            [['peminjam', 'id_ruang', 'no_rkm_medis', 'tgl_pinjam', 'nip'], 'unique', 'targetAttribute' => ['peminjam', 'id_ruang', 'no_rkm_medis', 'tgl_pinjam', 'nip']],
            [['no_rkm_medis'], 'exist', 'skipOnError' => true, 'targetClass' => Pasien::class, 'targetAttribute' => ['no_rkm_medis' => 'no_rkm_medis']],
            [['nip'], 'exist', 'skipOnError' => true, 'targetClass' => Petugas::class, 'targetAttribute' => ['nip' => 'nip']],
            [['id_ruang'], 'exist', 'skipOnError' => true, 'targetClass' => InventarisRuang::class, 'targetAttribute' => ['id_ruang' => 'id_ruang']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'peminjam' => 'Peminjam',
            'id_ruang' => 'Id Ruang',
            'no_rkm_medis' => 'No Rkm Medis',
            'tgl_pinjam' => 'Tgl Pinjam',
            'tgl_kembali' => 'Tgl Kembali',
            'nip' => 'Nip',
            'status_pinjam' => 'Status Pinjam',
        ];
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
     * Gets query for [[NoRkmMedis]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getNoRkmMedis()
    {
        return $this->hasOne(Pasien::class, ['no_rkm_medis' => 'no_rkm_medis']);
    }

    /**
     * Gets query for [[Ruang]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getRuang()
    {
        return $this->hasOne(InventarisRuang::class, ['id_ruang' => 'id_ruang']);
    }
}
