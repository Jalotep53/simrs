<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "tokopiutang".
 *
 * @property string $nota_piutang
 * @property string|null $tgl_piutang
 * @property string|null $nip
 * @property string|null $no_member
 * @property string|null $nm_member
 * @property string|null $catatan
 * @property string|null $jns_jual
 * @property float|null $ongkir
 * @property float|null $uangmuka
 * @property float $sisapiutang
 * @property string $tgltempo
 *
 * @property Petugas $nip0
 * @property Tokomember $noMember
 * @property TokoBayarPiutang[] $tokoBayarPiutangs
 * @property TokoDetailPiutang[] $tokoDetailPiutangs
 */
class Tokopiutang extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'tokopiutang';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nota_piutang', 'sisapiutang', 'tgltempo'], 'required'],
            [['tgl_piutang', 'tgltempo'], 'safe'],
            [['jns_jual'], 'string'],
            [['ongkir', 'uangmuka', 'sisapiutang'], 'number'],
            [['nota_piutang', 'no_member'], 'string', 'max' => 15],
            [['nip'], 'string', 'max' => 20],
            [['nm_member'], 'string', 'max' => 50],
            [['catatan'], 'string', 'max' => 40],
            [['nota_piutang'], 'unique'],
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
            'nota_piutang' => 'Nota Piutang',
            'tgl_piutang' => 'Tgl Piutang',
            'nip' => 'Nip',
            'no_member' => 'No Member',
            'nm_member' => 'Nm Member',
            'catatan' => 'Catatan',
            'jns_jual' => 'Jns Jual',
            'ongkir' => 'Ongkir',
            'uangmuka' => 'Uangmuka',
            'sisapiutang' => 'Sisapiutang',
            'tgltempo' => 'Tgltempo',
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
     * Gets query for [[TokoBayarPiutangs]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getTokoBayarPiutangs()
    {
        return $this->hasMany(TokoBayarPiutang::class, ['nota_piutang' => 'nota_piutang']);
    }

    /**
     * Gets query for [[TokoDetailPiutangs]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getTokoDetailPiutangs()
    {
        return $this->hasMany(TokoDetailPiutang::class, ['nota_piutang' => 'nota_piutang']);
    }
}
