<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/** @var yii\web\View $this */
/** @var frontend\models\TransferPasienAntarRuang $model */

$this->title = $model->no_rawat;
$this->params['breadcrumbs'][] = ['label' => 'Transfer Pasien Antar Ruangs', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="transfer-pasien-antar-ruang-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'no_rawat' => $model->no_rawat, 'tanggal_masuk' => $model->tanggal_masuk], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'no_rawat' => $model->no_rawat, 'tanggal_masuk' => $model->tanggal_masuk], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'no_rawat',
            'tanggal_masuk',
            'tanggal_pindah',
            'asal_ruang',
            'ruang_selanjutnya',
            'diagnosa_utama',
            'diagnosa_sekunder',
            'indikasi_pindah_ruang',
            'keterangan_indikasi_pindah_ruang',
            'prosedur_yang_sudah_dilakukan',
            'obat_yang_telah_diberikan',
            'metode_pemindahan_pasien',
            'peralatan_yang_menyertai',
            'keterangan_peralatan_yang_menyertai',
            'pemeriksaan_penunjang_yang_dilakukan',
            'pasien_keluarga_menyetujui',
            'nama_menyetujui',
            'hubungan_menyetujui',
            'keluhan_utama_sebelum_transfer',
            'keadaan_umum_sebelum_transfer',
            'td_sebelum_transfer',
            'nadi_sebelum_transfer',
            'rr_sebelum_transfer',
            'suhu_sebelum_transfer',
            'keluhan_utama_sesudah_transfer',
            'keadaan_umum_sesudah_transfer',
            'td_sesudah_transfer',
            'nadi_sesudah_transfer',
            'rr_sesudah_transfer',
            'suhu_sesudah_transfer',
            'nip_menyerahkan',
            'nip_menerima',
        ],
    ]) ?>

</div>
