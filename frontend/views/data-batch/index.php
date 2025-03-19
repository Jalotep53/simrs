<?php

use frontend\models\DataBatch;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var frontend\models\DataBatchSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Data Batches';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="data-batch-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Data Batch', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'no_batch',
            'kode_brng',
            'tgl_beli',
            'tgl_kadaluarsa',
            'asal',
            //'no_faktur',
            //'dasar',
            //'h_beli',
            //'ralan',
            //'kelas1',
            //'kelas2',
            //'kelas3',
            //'utama',
            //'vip',
            //'vvip',
            //'beliluar',
            //'jualbebas',
            //'karyawan',
            //'jumlahbeli',
            //'sisa',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, DataBatch $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'no_batch' => $model->no_batch, 'kode_brng' => $model->kode_brng, 'no_faktur' => $model->no_faktur]);
                 }
            ],
        ],
    ]); ?>


</div>
