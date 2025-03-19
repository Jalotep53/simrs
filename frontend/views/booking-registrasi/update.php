<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\BookingRegistrasi $model */

$this->title = 'Update Booking Registrasi: ' . $model->no_rkm_medis;
$this->params['breadcrumbs'][] = ['label' => 'Booking Registrasis', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->no_rkm_medis, 'url' => ['view', 'no_rkm_medis' => $model->no_rkm_medis, 'tanggal_periksa' => $model->tanggal_periksa]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="booking-registrasi-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
