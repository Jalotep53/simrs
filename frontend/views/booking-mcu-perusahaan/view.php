<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/** @var yii\web\View $this */
/** @var frontend\models\BookingMcuPerusahaan $model */

$this->title = $model->no_mcu;
$this->params['breadcrumbs'][] = ['label' => 'Booking Mcu Perusahaans', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="booking-mcu-perusahaan-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'no_mcu' => $model->no_mcu], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'no_mcu' => $model->no_mcu], [
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
            'tanggal_booking',
            'jam_booking',
            'no_rkm_medis',
            'tanggal_mcu',
            'no_mcu',
            'status',
            'kode_perusahaan',
        ],
    ]) ?>

</div>
