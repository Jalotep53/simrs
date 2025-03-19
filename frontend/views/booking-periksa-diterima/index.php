<?php

use frontend\models\BookingPeriksaDiterima;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var frontend\models\BookingPeriksaDiterimaSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Booking Periksa Diterimas';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="booking-periksa-diterima-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Booking Periksa Diterima', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'no_booking',
            'no_rkm_medis',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, BookingPeriksaDiterima $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'no_booking' => $model->no_booking]);
                 }
            ],
        ],
    ]); ?>


</div>
