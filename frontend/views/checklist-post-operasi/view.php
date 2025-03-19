<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/** @var yii\web\View $this */
/** @var frontend\models\ChecklistPostOperasi $model */

$this->title = $model->no_rawat;
$this->params['breadcrumbs'][] = ['label' => 'Checklist Post Operasis', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="checklist-post-operasi-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'no_rawat' => $model->no_rawat, 'tanggal' => $model->tanggal], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'no_rawat' => $model->no_rawat, 'tanggal' => $model->tanggal], [
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
            'tanggal',
            'sncn',
            'tindakan',
            'kd_dokter_bedah',
            'kd_dokter_anestesi',
            'keadaan_umum',
            'pemeriksaan_penunjang_rontgen',
            'keterangan_pemeriksaan_penunjang_rontgen',
            'pemeriksaan_penunjang_ekg',
            'keterangan_pemeriksaan_penunjang_ekg',
            'pemeriksaan_penunjang_usg',
            'keterangan_pemeriksaan_penunjang_usg',
            'pemeriksaan_penunjang_ctscan',
            'keterangan_pemeriksaan_penunjang_ctscan',
            'pemeriksaan_penunjang_mri',
            'keterangan_pemeriksaan_penunjang_mri',
            'jenis_cairan_infus',
            'kateter_urine',
            'tanggal_pemasangan_kateter',
            'warna_kateter',
            'jumlah_kateter',
            'area_luka_operasi',
            'drain',
            'jumlah_drain',
            'letak_drain',
            'warna_drain',
            'jaringan_pa',
            'nip_perawat_ok',
            'nip_perawat_anestesi',
        ],
    ]) ?>

</div>
