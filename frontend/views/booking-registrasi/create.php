<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\BookingRegistrasi $model */

$this->title = 'Create Booking Registrasi';
$this->params['breadcrumbs'][] = ['label' => 'Booking Registrasis', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="booking-registrasi-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
