<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "titip_faktur".
 *
 * @property string $no_tagihan
 * @property string|null $tanggal
 * @property string|null $nip
 * @property string|null $keterangan
 * @property string $status
 *
 * @property DetailTitipFaktur[] $detailTitipFakturs
 * @property Petugas $nip0
 * @property Pemesanan[] $noFakturs
 */
class TitipFaktur extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'titip_faktur';
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
     * Gets query for [[DetailTitipFakturs]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getDetailTitipFakturs()
    {
        return $this->hasMany(DetailTitipFaktur::class, ['no_tagihan' => 'no_tagihan']);
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
        return $this->hasMany(Pemesanan::class, ['no_faktur' => 'no_faktur'])->viaTable('detail_titip_faktur', ['no_tagihan' => 'no_tagihan']);
    }
}
