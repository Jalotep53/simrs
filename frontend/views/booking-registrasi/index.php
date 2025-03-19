<?php

use frontend\models\BookingRegistrasi;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var frontend\models\BookingRegistrasiSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Booking Registrasis';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="booking-registrasi-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Booking Registrasi', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'tanggal_booking',
            'jam_booking',
            'no_rkm_medis',
            'tanggal_periksa',
            'kd_dokter',
            //'kd_poli',
            //'no_reg',
            //'kd_pj',
            //'limit_reg',
            //'waktu_kunjungan',
            //'status',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, BookingRegistrasi $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'no_rkm_medis' => $model->no_rkm_medis, 'tanggal_periksa' => $model->tanggal_periksa]);
                 }
            ],
        ],
    ]); ?>


</div>
