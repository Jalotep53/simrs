<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/** @var yii\web\View $this */
/** @var frontend\models\PerencanaanPemulangan $model */

$this->title = $model->no_rawat;
$this->params['breadcrumbs'][] = ['label' => 'Perencanaan Pemulangans', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="perencanaan-pemulangan-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'no_rawat' => $model->no_rawat], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'no_rawat' => $model->no_rawat], [
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
            'rencana_pulang',
            'alasan_masuk',
            'diagnosa_medis',
            'pengaruh_ri_pasien_dan_keluarga',
            'keterangan_pengaruh_ri_pasien_dan_keluarga',
            'pengaruh_ri_pekerjaan_sekolah',
            'keterangan_pengaruh_ri_pekerjaan_sekolah',
            'pengaruh_ri_keuangan',
            'keterangan_pengaruh_ri_keuangan',
            'antisipasi_masalah_saat_pulang',
            'keterangan_antisipasi_masalah_saat_pulang',
            'bantuan_diperlukan_dalam',
            'keterangan_bantuan_diperlukan_dalam',
            'adakah_yang_membantu_keperluan',
            'keterangan_adakah_yang_membantu_keperluan',
            'pasien_tinggal_sendiri',
            'keterangan_pasien_tinggal_sendiri',
            'pasien_menggunakan_peralatan_medis',
            'keterangan_pasien_menggunakan_peralatan_medis',
            'pasien_memerlukan_alat_bantu',
            'keterangan_pasien_memerlukan_alat_bantu',
            'memerlukan_perawatan_khusus',
            'keterangan_memerlukan_perawatan_khusus',
            'bermasalah_memenuhi_kebutuhan',
            'keterangan_bermasalah_memenuhi_kebutuhan',
            'memiliki_nyeri_kronis',
            'keterangan_memiliki_nyeri_kronis',
            'memerlukan_edukasi_kesehatan',
            'keterangan_memerlukan_edukasi_kesehatan',
            'memerlukan_keterampilkan_khusus',
            'keterangan_memerlukan_keterampilkan_khusus',
            'nama_pasien_keluarga',
            'nip',
        ],
    ]) ?>

</div>
