<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "catatan_adime_gizi".
 *
 * @property string $no_rawat
 * @property string $tanggal
 * @property string|null $asesmen
 * @property string|null $diagnosis
 * @property string|null $intervensi
 * @property string|null $monitoring
 * @property string|null $evaluasi
 * @property string|null $instruksi
 * @property string|null $nip
 *
 * @property Petugas $nip0
 * @property RegPeriksa $noRawat
 */
class CatatanAdimeGizi extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'catatan_adime_gizi';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['no_rawat', 'tanggal'], 'required'],
            [['tanggal'], 'safe'],
            [['no_rawat'], 'string', 'max' => 17],
            [['asesmen', 'diagnosis', 'intervensi', 'monitoring', 'evaluasi', 'instruksi'], 'string', 'max' => 1000],
            [['nip'], 'string', 'max' => 20],
            [['no_rawat', 'tanggal'], 'unique', 'targetAttribute' => ['no_rawat', 'tanggal']],
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
            'asesmen' => 'Asesmen',
            'diagnosis' => 'Diagnosis',
            'intervensi' => 'Intervensi',
            'monitoring' => 'Monitoring',
            'evaluasi' => 'Evaluasi',
            'instruksi' => 'Instruksi',
            'nip' => 'Nip',
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
}
