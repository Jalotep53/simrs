<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\BookingPeriksaDiterima $model */

$this->title = 'Create Booking Periksa Diterima';
$this->params['breadcrumbs'][] = ['label' => 'Booking Periksa Diterimas', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="booking-periksa-diterima-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
