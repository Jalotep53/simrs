<?php

use frontend\models\BookingPeriksaBalasan;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var frontend\models\BookingPeriksaBalasanSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Booking Periksa Balasans';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="booking-periksa-balasan-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Booking Periksa Balasan', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'no_booking',
            'balasan',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, BookingPeriksaBalasan $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'no_booking' => $model->no_booking]);
                 }
            ],
        ],
    ]); ?>


</div>
