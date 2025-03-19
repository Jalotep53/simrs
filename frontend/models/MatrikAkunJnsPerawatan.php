<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "matrik_akun_jns_perawatan".
 *
 * @property string $kd_jenis_prw
 * @property string|null $pendapatan_tindakan
 * @property string|null $beban_jasa_dokter
 * @property string|null $utang_jasa_dokter
 * @property string|null $beban_jasa_paramedis
 * @property string|null $utang_jasa_paramedis
 * @property string|null $beban_kso
 * @property string|null $utang_kso
 * @property string|null $hpp_persediaan
 * @property string|null $persediaan_bhp
 * @property string|null $beban_jasa_sarana
 * @property string|null $utang_jasa_sarana
 * @property string|null $beban_menejemen
 * @property string|null $utang_menejemen
 *
 * @property Rekening $bebanJasaDokter
 * @property Rekening $bebanJasaParamedis
 * @property Rekening $bebanJasaSarana
 * @property Rekening $bebanKso
 * @property Rekening $bebanMenejemen
 * @property Rekening $hppPersediaan
 * @property JnsPerawatan $kdJenisPrw
 * @property Rekening $pendapatanTindakan
 * @property Rekening $persediaanBhp
 * @property Rekening $utangJasaDokter
 * @property Rekening $utangJasaParamedis
 * @property Rekening $utangJasaSarana
 * @property Rekening $utangKso
 * @property Rekening $utangMenejemen
 */
class MatrikAkunJnsPerawatan extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'matrik_akun_jns_perawatan';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['kd_jenis_prw'], 'required'],
            [['kd_jenis_prw', 'pendapatan_tindakan', 'beban_jasa_dokter', 'utang_jasa_dokter', 'beban_jasa_paramedis', 'utang_jasa_paramedis', 'beban_kso', 'utang_kso', 'hpp_persediaan', 'persediaan_bhp', 'beban_jasa_sarana', 'utang_jasa_sarana', 'beban_menejemen', 'utang_menejemen'], 'string', 'max' => 15],
            [['kd_jenis_prw'], 'unique'],
            [['kd_jenis_prw'], 'exist', 'skipOnError' => true, 'targetClass' => JnsPerawatan::class, 'targetAttribute' => ['kd_jenis_prw' => 'kd_jenis_prw']],
            [['utang_jasa_dokter'], 'exist', 'skipOnError' => true, 'targetClass' => Rekening::class, 'targetAttribute' => ['utang_jasa_dokter' => 'kd_rek']],
            [['utang_jasa_paramedis'], 'exist', 'skipOnError' => true, 'targetClass' => Rekening::class, 'targetAttribute' => ['utang_jasa_paramedis' => 'kd_rek']],
            [['utang_jasa_sarana'], 'exist', 'skipOnError' => true, 'targetClass' => Rekening::class, 'targetAttribute' => ['utang_jasa_sarana' => 'kd_rek']],
            [['utang_kso'], 'exist', 'skipOnError' => true, 'targetClass' => Rekening::class, 'targetAttribute' => ['utang_kso' => 'kd_rek']],
            [['utang_menejemen'], 'exist', 'skipOnError' => true, 'targetClass' => Rekening::class, 'targetAttribute' => ['utang_menejemen' => 'kd_rek']],
            [['beban_jasa_dokter'], 'exist', 'skipOnError' => true, 'targetClass' => Rekening::class, 'targetAttribute' => ['beban_jasa_dokter' => 'kd_rek']],
            [['beban_jasa_paramedis'], 'exist', 'skipOnError' => true, 'targetClass' => Rekening::class, 'targetAttribute' => ['beban_jasa_paramedis' => 'kd_rek']],
            [['beban_jasa_sarana'], 'exist', 'skipOnError' => true, 'targetClass' => Rekening::class, 'targetAttribute' => ['beban_jasa_sarana' => 'kd_rek']],
            [['beban_kso'], 'exist', 'skipOnError' => true, 'targetClass' => Rekening::class, 'targetAttribute' => ['beban_kso' => 'kd_rek']],
            [['beban_menejemen'], 'exist', 'skipOnError' => true, 'targetClass' => Rekening::class, 'targetAttribute' => ['beban_menejemen' => 'kd_rek']],
            [['hpp_persediaan'], 'exist', 'skipOnError' => true, 'targetClass' => Rekening::class, 'targetAttribute' => ['hpp_persediaan' => 'kd_rek']],
            [['pendapatan_tindakan'], 'exist', 'skipOnError' => true, 'targetClass' => Rekening::class, 'targetAttribute' => ['pendapatan_tindakan' => 'kd_rek']],
            [['persediaan_bhp'], 'exist', 'skipOnError' => true, 'targetClass' => Rekening::class, 'targetAttribute' => ['persediaan_bhp' => 'kd_rek']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'kd_jenis_prw' => 'Kd Jenis Prw',
            'pendapatan_tindakan' => 'Pendapatan Tindakan',
            'beban_jasa_dokter' => 'Beban Jasa Dokter',
            'utang_jasa_dokter' => 'Utang Jasa Dokter',
            'beban_jasa_paramedis' => 'Beban Jasa Paramedis',
            'utang_jasa_paramedis' => 'Utang Jasa Paramedis',
            'beban_kso' => 'Beban Kso',
            'utang_kso' => 'Utang Kso',
            'hpp_persediaan' => 'Hpp Persediaan',
            'persediaan_bhp' => 'Persediaan Bhp',
            'beban_jasa_sarana' => 'Beban Jasa Sarana',
            'utang_jasa_sarana' => 'Utang Jasa Sarana',
            'beban_menejemen' => 'Beban Menejemen',
            'utang_menejemen' => 'Utang Menejemen',
        ];
    }

    /**
     * Gets query for [[BebanJasaDokter]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getBebanJasaDokter()
    {
        return $this->hasOne(Rekening::class, ['kd_rek' => 'beban_jasa_dokter']);
    }

    /**
     * Gets query for [[BebanJasaParamedis]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getBebanJasaParamedis()
    {
        return $this->hasOne(Rekening::class, ['kd_rek' => 'beban_jasa_paramedis']);
    }

    /**
     * Gets query for [[BebanJasaSarana]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getBebanJasaSarana()
    {
        return $this->hasOne(Rekening::class, ['kd_rek' => 'beban_jasa_sarana']);
    }

    /**
     * Gets query for [[BebanKso]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getBebanKso()
    {
        return $this->hasOne(Rekening::class, ['kd_rek' => 'beban_kso']);
    }

    /**
     * Gets query for [[BebanMenejemen]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getBebanMenejemen()
    {
        return $this->hasOne(Rekening::class, ['kd_rek' => 'beban_menejemen']);
    }

    /**
     * Gets query for [[HppPersediaan]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getHppPersediaan()
    {
        return $this->hasOne(Rekening::class, ['kd_rek' => 'hpp_persediaan']);
    }

    /**
     * Gets query for [[KdJenisPrw]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getKdJenisPrw()
    {
        return $this->hasOne(JnsPerawatan::class, ['kd_jenis_prw' => 'kd_jenis_prw']);
    }

    /**
     * Gets query for [[PendapatanTindakan]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getPendapatanTindakan()
    {
        return $this->hasOne(Rekening::class, ['kd_rek' => 'pendapatan_tindakan']);
    }

    /**
     * Gets query for [[PersediaanBhp]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getPersediaanBhp()
    {
        return $this->hasOne(Rekening::class, ['kd_rek' => 'persediaan_bhp']);
    }

    /**
     * Gets query for [[UtangJasaDokter]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getUtangJasaDokter()
    {
        return $this->hasOne(Rekening::class, ['kd_rek' => 'utang_jasa_dokter']);
    }

    /**
     * Gets query for [[UtangJasaParamedis]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getUtangJasaParamedis()
    {
        return $this->hasOne(Rekening::class, ['kd_rek' => 'utang_jasa_paramedis']);
    }

    /**
     * Gets query for [[UtangJasaSarana]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getUtangJasaSarana()
    {
        return $this->hasOne(Rekening::class, ['kd_rek' => 'utang_jasa_sarana']);
    }

    /**
     * Gets query for [[UtangKso]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getUtangKso()
    {
        return $this->hasOne(Rekening::class, ['kd_rek' => 'utang_kso']);
    }

    /**
     * Gets query for [[UtangMenejemen]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getUtangMenejemen()
    {
        return $this->hasOne(Rekening::class, ['kd_rek' => 'utang_menejemen']);
    }
}
