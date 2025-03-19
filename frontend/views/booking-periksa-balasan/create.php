<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\BookingPeriksaBalasan $model */

$this->title = 'Create Booking Periksa Balasan';
$this->params['breadcrumbs'][] = ['label' => 'Booking Periksa Balasans', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="booking-periksa-balasan-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
