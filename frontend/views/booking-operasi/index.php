<?php

use frontend\models\BookingOperasi;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var frontend\models\BookingOperasiSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Booking Operasis';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="booking-operasi-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Booking Operasi', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'no_rawat',
            'kode_paket',
            'tanggal',
            'jam_mulai',
            'jam_selesai',
            //'status',
            //'kd_dokter',
            //'kd_ruang_ok',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, BookingOperasi $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'no_rawat' => $model->no_rawat, 'kode_paket' => $model->kode_paket, 'tanggal' => $model->tanggal, 'jam_mulai' => $model->jam_mulai]);
                 }
            ],
        ],
    ]); ?>


</div>
