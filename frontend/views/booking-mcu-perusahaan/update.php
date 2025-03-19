<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\BookingMcuPerusahaan $model */

$this->title = 'Update Booking Mcu Perusahaan: ' . $model->no_mcu;
$this->params['breadcrumbs'][] = ['label' => 'Booking Mcu Perusahaans', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->no_mcu, 'url' => ['view', 'no_mcu' => $model->no_mcu]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="booking-mcu-perusahaan-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
