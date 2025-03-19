<?php

use frontend\models\PeminjamanKoperasi;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var frontend\models\PeminjamanKoperasiSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Peminjaman Koperasis';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="peminjaman-koperasi-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Peminjaman Koperasi', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'tanggal',
            'pinjaman',
            'banyak_angsur',
            'pokok',
            //'jasa',
            //'status',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, PeminjamanKoperasi $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'id' => $model->id, 'tanggal' => $model->tanggal]);
                 }
            ],
        ],
    ]); ?>


</div>
