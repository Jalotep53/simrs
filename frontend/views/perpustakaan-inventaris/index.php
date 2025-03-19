<?php

use frontend\models\PerpustakaanInventaris;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var frontend\models\PerpustakaanInventarisSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Perpustakaan Inventaris';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="perpustakaan-inventaris-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Perpustakaan Inventaris', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'no_inventaris',
            'kode_buku',
            'asal_buku',
            'tgl_pengadaan',
            'harga',
            //'status_buku',
            //'kd_ruang',
            //'no_rak',
            //'no_box',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, PerpustakaanInventaris $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'no_inventaris' => $model->no_inventaris]);
                 }
            ],
        ],
    ]); ?>


</div>
