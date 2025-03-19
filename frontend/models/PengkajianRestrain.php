<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "pengkajian_restrain".
 *
 * @property string $no_rawat
 * @property string $tanggal
 * @property string $nip
 * @property string|null $gcs
 * @property string|null $refleka_cahaya_ka
 * @property string|null $refleka_cahaya_ki
 * @property string|null $ukuran_pupil_ka
 * @property string|null $ukuran_pupil_ki
 * @property string|null $td
 * @property string|null $suhu
 * @property string|null $rr
 * @property string|null $nadi
 * @property string|null $hasil_observasi
 * @property string|null $pertimbangan_klinis
 * @property string|null $restrain_non_farmakologi
 * @property string|null $restrain_non_farmakologi_keterangan
 * @property string|null $restrain_farmakologi
 * @property string $sudah_dijelaskan_keluarga
 * @property string|null $keluarga_yang_menyetujui
 *
 * @property Petugas $nip0
 * @property RegPeriksa $noRawat
 * @property PengkajianRestrainYangMenyetujui $pengkajianRestrainYangMenyetujui
 */
class PengkajianRestrain extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'pengkajian_restrain';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['no_rawat', 'tanggal', 'nip', 'sudah_dijelaskan_keluarga'], 'required'],
            [['tanggal'], 'safe'],
            [['hasil_observasi', 'pertimbangan_klinis', 'restrain_non_farmakologi', 'sudah_dijelaskan_keluarga'], 'string'],
            [['no_rawat'], 'string', 'max' => 17],
            [['nip'], 'string', 'max' => 20],
            [['gcs', 'suhu', 'rr', 'nadi'], 'string', 'max' => 5],
            [['refleka_cahaya_ka', 'refleka_cahaya_ki', 'ukuran_pupil_ka', 'ukuran_pupil_ki'], 'string', 'max' => 3],
            [['td'], 'string', 'max' => 8],
            [['restrain_non_farmakologi_keterangan'], 'string', 'max' => 50],
            [['restrain_farmakologi'], 'string', 'max' => 200],
            [['keluarga_yang_menyetujui'], 'string', 'max' => 100],
            [['no_rawat'], 'unique'],
            [['no_rawat'], 'exist', 'skipOnError' => true, 'targetClass' => RegPeriksa::class, 'targetAttribute' => ['no_rawat' => 'no_rawat']],
            [['nip'], 'exist', 'skipOnError' => true, 'targetClass' => Petugas::class, 'targetAttribute' => ['nip' => 'nip']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'no_rawat' => 'No Rawat',
            'tanggal' => 'Tanggal',
            'nip' => 'Nip',
            'gcs' => 'Gcs',
            'refleka_cahaya_ka' => 'Refleka Cahaya Ka',
            'refleka_cahaya_ki' => 'Refleka Cahaya Ki',
            'ukuran_pupil_ka' => 'Ukuran Pupil Ka',
            'ukuran_pupil_ki' => 'Ukuran Pupil Ki',
            'td' => 'Td',
            'suhu' => 'Suhu',
            'rr' => 'Rr',
            'nadi' => 'Nadi',
            'hasil_observasi' => 'Hasil Observasi',
            'pertimbangan_klinis' => 'Pertimbangan Klinis',
            'restrain_non_farmakologi' => 'Restrain Non Farmakologi',
            'restrain_non_farmakologi_keterangan' => 'Restrain Non Farmakologi Keterangan',
            'restrain_farmakologi' => 'Restrain Farmakologi',
            'sudah_dijelaskan_keluarga' => 'Sudah Dijelaskan Keluarga',
            'keluarga_yang_menyetujui' => 'Keluarga Yang Menyetujui',
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
     * Gets query for [[NoRawat]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getNoRawat()
    {
        return $this->hasOne(RegPeriksa::class, ['no_rawat' => 'no_rawat']);
    }

    /**
     * Gets query for [[PengkajianRestrainYangMenyetujui]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getPengkajianRestrainYangMenyetujui()
    {
        return $this->hasOne(PengkajianRestrainYangMenyetujui::class, ['no_rawat' => 'no_rawat']);
    }
}
