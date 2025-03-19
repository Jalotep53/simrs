<?php

use frontend\models\PengajuanInventaris;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var frontend\models\PengajuanInventarisSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Pengajuan Inventaris';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="pengajuan-inventaris-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Pengajuan Inventaris', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'no_pengajuan',
            'tanggal',
            'nik',
            'urgensi',
            'latar_belakang',
            //'nama_barang',
            //'spesifikasi',
            //'jumlah',
            //'harga',
            //'total',
            //'keterangan',
            //'nik_pj',
            //'status',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, PengajuanInventaris $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'no_pengajuan' => $model->no_pengajuan]);
                 }
            ],
        ],
    ]); ?>


</div>
