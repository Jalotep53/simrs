<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\BookingPeriksa $model */

$this->title = 'Create Booking Periksa';
$this->params['breadcrumbs'][] = ['label' => 'Booking Periksas', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="booking-periksa-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
