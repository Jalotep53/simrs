<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\BookingMcuPerusahaanBerhasilRegistrasi $model */

$this->title = 'Update Booking Mcu Perusahaan Berhasil Registrasi: ' . $model->no_mcu;
$this->params['breadcrumbs'][] = ['label' => 'Booking Mcu Perusahaan Berhasil Registrasis', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->no_mcu, 'url' => ['view', 'no_mcu' => $model->no_mcu, 'no_rawat' => $model->no_rawat]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="booking-mcu-perusahaan-berhasil-registrasi-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
