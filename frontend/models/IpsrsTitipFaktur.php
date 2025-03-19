<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "ipsrs_titip_faktur".
 *
 * @property string $no_tagihan
 * @property string|null $tanggal
 * @property string|null $nip
 * @property string|null $keterangan
 * @property string $status
 *
 * @property IpsrsDetailTitipFaktur[] $ipsrsDetailTitipFakturs
 * @property Petugas $nip0
 * @property Ipsrspemesanan[] $noFakturs
 */
class IpsrsTitipFaktur extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'ipsrs_titip_faktur';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['no_tagihan', 'status'], 'required'],
            [['tanggal'], 'safe'],
            [['status'], 'string'],
            [['no_tagihan', 'nip'], 'string', 'max' => 20],
            [['keterangan'], 'string', 'max' => 150],
            [['no_tagihan'], 'unique'],
            [['nip'], 'exist', 'skipOnError' => true, 'targetClass' => Petugas::class, 'targetAttribute' => ['nip' => 'nip']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'no_tagihan' => 'No Tagihan',
            'tanggal' => 'Tanggal',
            'nip' => 'Nip',
            'keterangan' => 'Keterangan',
            'status' => 'Status',
        ];
    }

    /**
     * Gets query for [[IpsrsDetailTitipFakturs]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getIpsrsDetailTitipFakturs()
    {
        return $this->hasMany(IpsrsDetailTitipFaktur::class, ['no_tagihan' => 'no_tagihan']);
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
     * Gets query for [[NoFakturs]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getNoFakturs()
    {
        return $this->hasMany(Ipsrspemesanan::class, ['no_faktur' => 'no_faktur'])->viaTable('ipsrs_detail_titip_faktur', ['no_tagihan' => 'no_tagihan']);
    }
}
