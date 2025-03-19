<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/** @var yii\web\View $this */
/** @var frontend\models\TimeoutSebelumInsisi $model */

$this->title = $model->no_rawat;
$this->params['breadcrumbs'][] = ['label' => 'Timeout Sebelum Insisis', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="timeout-sebelum-insisi-view">

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
            'verbal_identitas',
            'verbal_tindakan',
            'verbal_area_insisi',
            'penandaan_area_operasi',
            'lama_operasi',
            'penayangan_radiologi',
            'penayangan_ctscan',
            'penayangan_mri',
            'antibiotik_profilaks',
            'nama_antibiotik',
            'jam_pemberian',
            'antisipasi_kehilangan_darah',
            'hal_khusus',
            'hal_khusus_diperhatikan',
            'tanggal_steril',
            'petujuk_sterilisasi',
            'verifikasi_preoperatif',
            'nip_perawat_ok',
        ],
    ]) ?>

</div>
