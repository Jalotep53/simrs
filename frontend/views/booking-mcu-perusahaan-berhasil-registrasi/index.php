<?php

use frontend\models\BookingMcuPerusahaanBerhasilRegistrasi;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var frontend\models\BookingMcuPerusahaanBerhasilRegistrasiSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Booking Mcu Perusahaan Berhasil Registrasis';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="booking-mcu-perusahaan-berhasil-registrasi-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Booking Mcu Perusahaan Berhasil Registrasi', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'no_mcu',
            'no_rawat',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, BookingMcuPerusahaanBerhasilRegistrasi $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'no_mcu' => $model->no_mcu, 'no_rawat' => $model->no_rawat]);
                 }
            ],
        ],
    ]); ?>


</div>
