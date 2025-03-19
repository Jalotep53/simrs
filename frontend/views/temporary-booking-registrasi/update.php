<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\TemporaryBookingRegistrasi $model */

$this->title = 'Update Temporary Booking Registrasi: ' . $model->no;
$this->params['breadcrumbs'][] = ['label' => 'Temporary Booking Registrasis', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->no, 'url' => ['view', 'no' => $model->no]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="temporary-booking-registrasi-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
