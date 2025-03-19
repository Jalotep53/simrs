<?php

use frontend\models\BookingPeriksa;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var frontend\models\BookingPeriksaSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Booking Periksas';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="booking-periksa-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Booking Periksa', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'no_booking',
            'tanggal',
            'nama',
            'alamat',
            'no_telp',
            //'email:email',
            //'kd_poli',
            //'tambahan_pesan',
            //'status',
            //'tanggal_booking',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, BookingPeriksa $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'no_booking' => $model->no_booking]);
                 }
            ],
        ],
    ]); ?>


</div>
