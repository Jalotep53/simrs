<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "ruang_audit_kepatuhan".
 *
 * @property string $id_ruang
 * @property string $nama_ruang
 *
 * @property AuditBundleIdo[] $auditBundleIdos
 * @property AuditBundleIsk[] $auditBundleIsks
 * @property AuditBundlePlabsi[] $auditBundlePlabsis
 * @property AuditBundleVap[] $auditBundleVaps
 * @property AuditFasilitasApd[] $auditFasilitasApds
 * @property AuditFasilitasKebersihanTangan[] $auditFasilitasKebersihanTangans
 * @property AuditPembuanganBendaTajam[] $auditPembuanganBendaTajams
 * @property AuditPembuanganLimbahCairInfeksius[] $auditPembuanganLimbahCairInfeksiuses
 * @property AuditPembuanganLimbah[] $auditPembuanganLimbahs
 * @property AuditPenangananDarah[] $auditPenangananDarahs
 * @property AuditPenempatanPasien[] $auditPenempatanPasiens
 * @property AuditPengelolaanLinenKotor[] $auditPengelolaanLinenKotors
 * @property AuditSterilisasiAlat[] $auditSterilisasiAlats
 */
class RuangAuditKepatuhan extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'ruang_audit_kepatuhan';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_ruang', 'nama_ruang'], 'required'],
            [['id_ruang'], 'string', 'max' => 5],
            [['nama_ruang'], 'string', 'max' => 40],
            [['id_ruang'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_ruang' => 'Id Ruang',
            'nama_ruang' => 'Nama Ruang',
        ];
    }

    /**
     * Gets query for [[AuditBundleIdos]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getAuditBundleIdos()
    {
        return $this->hasMany(AuditBundleIdo::class, ['id_ruang' => 'id_ruang']);
    }

    /**
     * Gets query for [[AuditBundleIsks]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getAuditBundleIsks()
    {
        return $this->hasMany(AuditBundleIsk::class, ['id_ruang' => 'id_ruang']);
    }

    /**
     * Gets query for [[AuditBundlePlabsis]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getAuditBundlePlabsis()
    {
        return $this->hasMany(AuditBundlePlabsi::class, ['id_ruang' => 'id_ruang']);
    }

    /**
     * Gets query for [[AuditBundleVaps]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getAuditBundleVaps()
    {
        return $this->hasMany(AuditBundleVap::class, ['id_ruang' => 'id_ruang']);
    }

    /**
     * Gets query for [[AuditFasilitasApds]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getAuditFasilitasApds()
    {
        return $this->hasMany(AuditFasilitasApd::class, ['id_ruang' => 'id_ruang']);
    }

    /**
     * Gets query for [[AuditFasilitasKebersihanTangans]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getAuditFasilitasKebersihanTangans()
    {
        return $this->hasMany(AuditFasilitasKebersihanTangan::class, ['id_ruang' => 'id_ruang']);
    }

    /**
     * Gets query for [[AuditPembuanganBendaTajams]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getAuditPembuanganBendaTajams()
    {
        return $this->hasMany(AuditPembuanganBendaTajam::class, ['id_ruang' => 'id_ruang']);
    }

    /**
     * Gets query for [[AuditPembuanganLimbahCairInfeksiuses]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getAuditPembuanganLimbahCairInfeksiuses()
    {
        return $this->hasMany(AuditPembuanganLimbahCairInfeksius::class, ['id_ruang' => 'id_ruang']);
    }

    /**
     * Gets query for [[AuditPembuanganLimbahs]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getAuditPembuanganLimbahs()
    {
        return $this->hasMany(AuditPembuanganLimbah::class, ['id_ruang' => 'id_ruang']);
    }

    /**
     * Gets query for [[AuditPenangananDarahs]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getAuditPenangananDarahs()
    {
        return $this->hasMany(AuditPenangananDarah::class, ['id_ruang' => 'id_ruang']);
    }

    /**
     * Gets query for [[AuditPenempatanPasiens]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getAuditPenempatanPasiens()
    {
        return $this->hasMany(AuditPenempatanPasien::class, ['id_ruang' => 'id_ruang']);
    }

    /**
     * Gets query for [[AuditPengelolaanLinenKotors]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getAuditPengelolaanLinenKotors()
    {
        return $this->hasMany(AuditPengelolaanLinenKotor::class, ['id_ruang' => 'id_ruang']);
    }

    /**
     * Gets query for [[AuditSterilisasiAlats]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getAuditSterilisasiAlats()
    {
        return $this->hasMany(AuditSterilisasiAlat::class, ['id_ruang' => 'id_ruang']);
    }
}
