<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/** @var yii\web\View $this */
/** @var frontend\models\BookingPeriksaBalasan $model */

$this->title = $model->no_booking;
$this->params['breadcrumbs'][] = ['label' => 'Booking Periksa Balasans', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="booking-periksa-balasan-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'no_booking' => $model->no_booking], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'no_booking' => $model->no_booking], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'no_booking',
            'balasan',
        ],
    ]) ?>

</div>
