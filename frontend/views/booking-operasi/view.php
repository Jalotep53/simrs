<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/** @var yii\web\View $this */
/** @var frontend\models\BookingOperasi $model */

$this->title = $model->no_rawat;
$this->params['breadcrumbs'][] = ['label' => 'Booking Operasis', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="booking-operasi-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'no_rawat' => $model->no_rawat, 'kode_paket' => $model->kode_paket, 'tanggal' => $model->tanggal, 'jam_mulai' => $model->jam_mulai], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'no_rawat' => $model->no_rawat, 'kode_paket' => $model->kode_paket, 'tanggal' => $model->tanggal, 'jam_mulai' => $model->jam_mulai], [
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
            'no_rawat',
            'kode_paket',
            'tanggal',
            'jam_mulai',
            'jam_selesai',
            'status',
            'kd_dokter',
            'kd_ruang_ok',
        ],
    ]) ?>

</div>
