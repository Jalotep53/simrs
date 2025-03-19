<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\BookingOperasi $model */

$this->title = 'Update Booking Operasi: ' . $model->no_rawat;
$this->params['breadcrumbs'][] = ['label' => 'Booking Operasis', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->no_rawat, 'url' => ['view', 'no_rawat' => $model->no_rawat, 'kode_paket' => $model->kode_paket, 'tanggal' => $model->tanggal, 'jam_mulai' => $model->jam_mulai]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="booking-operasi-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
