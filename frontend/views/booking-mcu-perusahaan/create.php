<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\BookingMcuPerusahaan $model */

$this->title = 'Create Booking Mcu Perusahaan';
$this->params['breadcrumbs'][] = ['label' => 'Booking Mcu Perusahaans', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="booking-mcu-perusahaan-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
