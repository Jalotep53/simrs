<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "tokoreturjual".
 *
 * @property string $no_retur_jual
 * @property string|null $tgl_retur
 * @property string|null $nip
 * @property string $no_member
 * @property string $catatan
 * @property float $total
 *
 * @property Petugas $nip0
 * @property Tokomember $noMember
 * @property TokoDetailReturjual[] $tokoDetailReturjuals
 */
class Tokoreturjual extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'tokoreturjual';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['no_retur_jual', 'no_member', 'catatan', 'total'], 'required'],
            [['tgl_retur'], 'safe'],
            [['total'], 'number'],
            [['no_retur_jual'], 'string', 'max' => 15],
            [['nip'], 'string', 'max' => 20],
            [['no_member'], 'string', 'max' => 10],
            [['catatan'], 'string', 'max' => 40],
            [['no_retur_jual'], 'unique'],
            [['no_member'], 'exist', 'skipOnError' => true, 'targetClass' => Tokomember::class, 'targetAttribute' => ['no_member' => 'no_member']],
            [['nip'], 'exist', 'skipOnError' => true, 'targetClass' => Petugas::class, 'targetAttribute' => ['nip' => 'nip']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'no_retur_jual' => 'No Retur Jual',
            'tgl_retur' => 'Tgl Retur',
            'nip' => 'Nip',
            'no_member' => 'No Member',
            'catatan' => 'Catatan',
            'total' => 'Total',
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
     * Gets query for [[NoMember]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getNoMember()
    {
        return $this->hasOne(Tokomember::class, ['no_member' => 'no_member']);
    }

    /**
     * Gets query for [[TokoDetailReturjuals]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getTokoDetailReturjuals()
    {
        return $this->hasMany(TokoDetailReturjual::class, ['no_retur_jual' => 'no_retur_jual']);
    }
}
