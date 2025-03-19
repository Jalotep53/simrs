<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\BookingMcuPerusahaanPasienBaru $model */

$this->title = 'Update Booking Mcu Perusahaan Pasien Baru: ' . $model->no_pengajuan;
$this->params['breadcrumbs'][] = ['label' => 'Booking Mcu Perusahaan Pasien Barus', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->no_pengajuan, 'url' => ['view', 'no_pengajuan' => $model->no_pengajuan]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="booking-mcu-perusahaan-pasien-baru-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
