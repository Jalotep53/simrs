<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "toko_bayar_piutang".
 *
 * @property string $tgl_bayar
 * @property string $no_member
 * @property float $besar_cicilan
 * @property string $catatan
 * @property string $nota_piutang
 * @property string $kd_rek
 * @property string $kd_rek_kontra
 *
 * @property Rekening $kdRek
 * @property Rekening $kdRekKontra
 * @property Tokomember $noMember
 * @property Tokopiutang $notaPiutang
 */
class TokoBayarPiutang extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'toko_bayar_piutang';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['tgl_bayar', 'no_member', 'besar_cicilan', 'catatan', 'nota_piutang', 'kd_rek', 'kd_rek_kontra'], 'required'],
            [['tgl_bayar'], 'safe'],
            [['besar_cicilan'], 'number'],
            [['no_member'], 'string', 'max' => 10],
            [['catatan'], 'string', 'max' => 100],
            [['nota_piutang', 'kd_rek', 'kd_rek_kontra'], 'string', 'max' => 15],
            [['tgl_bayar', 'no_member', 'nota_piutang', 'kd_rek', 'kd_rek_kontra'], 'unique', 'targetAttribute' => ['tgl_bayar', 'no_member', 'nota_piutang', 'kd_rek', 'kd_rek_kontra']],
            [['no_member'], 'exist', 'skipOnError' => true, 'targetClass' => Tokomember::class, 'targetAttribute' => ['no_member' => 'no_member']],
            [['kd_rek'], 'exist', 'skipOnError' => true, 'targetClass' => Rekening::class, 'targetAttribute' => ['kd_rek' => 'kd_rek']],
            [['kd_rek_kontra'], 'exist', 'skipOnError' => true, 'targetClass' => Rekening::class, 'targetAttribute' => ['kd_rek_kontra' => 'kd_rek']],
            [['nota_piutang'], 'exist', 'skipOnError' => true, 'targetClass' => Tokopiutang::class, 'targetAttribute' => ['nota_piutang' => 'nota_piutang']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'tgl_bayar' => 'Tgl Bayar',
            'no_member' => 'No Member',
            'besar_cicilan' => 'Besar Cicilan',
            'catatan' => 'Catatan',
            'nota_piutang' => 'Nota Piutang',
            'kd_rek' => 'Kd Rek',
            'kd_rek_kontra' => 'Kd Rek Kontra',
        ];
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
     * Gets query for [[KdRekKontra]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getKdRekKontra()
    {
        return $this->hasOne(Rekening::class, ['kd_rek' => 'kd_rek_kontra']);
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
     * Gets query for [[NotaPiutang]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getNotaPiutang()
    {
        return $this->hasOne(Tokopiutang::class, ['nota_piutang' => 'nota_piutang']);
    }
}
