<?php

use frontend\models\PengajuanBiaya;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var frontend\models\PengajuanBiayaSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Pengajuan Biayas';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="pengajuan-biaya-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Pengajuan Biaya', ['create'], ['class' => 'btn btn-success']) ?>
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
            'uraian_latar_belakang',
            //'tujuan_pengajuan',
            //'target_sasaran',
            //'lokasi_kegiatan',
            //'jumlah',
            //'harga',
            //'total',
            //'keterangan',
            //'nik_pj',
            //'status',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, PengajuanBiaya $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'no_pengajuan' => $model->no_pengajuan]);
                 }
            ],
        ],
    ]); ?>


</div>
