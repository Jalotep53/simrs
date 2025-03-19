<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/** @var yii\web\View $this */
/** @var frontend\models\BookingRegistrasi $model */

$this->title = $model->no_rkm_medis;
$this->params['breadcrumbs'][] = ['label' => 'Booking Registrasis', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="booking-registrasi-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'no_rkm_medis' => $model->no_rkm_medis, 'tanggal_periksa' => $model->tanggal_periksa], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'no_rkm_medis' => $model->no_rkm_medis, 'tanggal_periksa' => $model->tanggal_periksa], [
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
            'tanggal_periksa',
            'kd_dokter',
            'kd_poli',
            'no_reg',
            'kd_pj',
            'limit_reg',
            'waktu_kunjungan',
            'status',
        ],
    ]) ?>

</div>
