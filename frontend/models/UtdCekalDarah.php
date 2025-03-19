<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "utd_cekal_darah".
 *
 * @property string $no_donor
 * @property string|null $tanggal
 * @property string|null $dinas
 * @property string|null $petugas_pemusnahan
 * @property string|null $keterangan
 *
 * @property UtdDonor $noDonor
 * @property Petugas $petugasPemusnahan
 */
class UtdCekalDarah extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'utd_cekal_darah';
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
            [['petugas_pemusnahan'], 'string', 'max' => 20],
            [['keterangan'], 'string', 'max' => 100],
            [['no_donor'], 'unique'],
            [['no_donor'], 'exist', 'skipOnError' => true, 'targetClass' => UtdDonor::class, 'targetAttribute' => ['no_donor' => 'no_donor']],
            [['petugas_pemusnahan'], 'exist', 'skipOnError' => true, 'targetClass' => Petugas::class, 'targetAttribute' => ['petugas_pemusnahan' => 'nip']],
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
            'petugas_pemusnahan' => 'Petugas Pemusnahan',
            'keterangan' => 'Keterangan',
        ];
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
     * Gets query for [[PetugasPemusnahan]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getPetugasPemusnahan()
    {
        return $this->hasOne(Petugas::class, ['nip' => 'petugas_pemusnahan']);
    }
}
