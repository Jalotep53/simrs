<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\BookingMcuPerusahaanBerhasilRegistrasi $model */

$this->title = 'Create Booking Mcu Perusahaan Berhasil Registrasi';
$this->params['breadcrumbs'][] = ['label' => 'Booking Mcu Perusahaan Berhasil Registrasis', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="booking-mcu-perusahaan-berhasil-registrasi-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
