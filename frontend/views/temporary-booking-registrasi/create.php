<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\TemporaryBookingRegistrasi $model */

$this->title = 'Create Temporary Booking Registrasi';
$this->params['breadcrumbs'][] = ['label' => 'Temporary Booking Registrasis', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="temporary-booking-registrasi-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
