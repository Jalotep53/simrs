<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\BookingPeriksaDiterima $model */

$this->title = 'Update Booking Periksa Diterima: ' . $model->no_booking;
$this->params['breadcrumbs'][] = ['label' => 'Booking Periksa Diterimas', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->no_booking, 'url' => ['view', 'no_booking' => $model->no_booking]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="booking-periksa-diterima-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
