<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\BookingMcuPerusahaanPasienBaru $model */

$this->title = 'Create Booking Mcu Perusahaan Pasien Baru';
$this->params['breadcrumbs'][] = ['label' => 'Booking Mcu Perusahaan Pasien Barus', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="booking-mcu-perusahaan-pasien-baru-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
