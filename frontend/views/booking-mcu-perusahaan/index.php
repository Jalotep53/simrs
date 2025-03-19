<?php

use frontend\models\BookingMcuPerusahaan;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var frontend\models\BookingMcuPerusahaanSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Booking Mcu Perusahaans';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="booking-mcu-perusahaan-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Booking Mcu Perusahaan', ['create'], ['class' => 'btn btn-success']) ?>
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
            'tanggal_mcu',
            'no_mcu',
            //'status',
            //'kode_perusahaan',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, BookingMcuPerusahaan $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'no_mcu' => $model->no_mcu]);
                 }
            ],
        ],
    ]); ?>


</div>
