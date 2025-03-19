<?php

use frontend\models\PerbaikanInventaris;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var frontend\models\PerbaikanInventarisSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Perbaikan Inventaris';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="perbaikan-inventaris-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Perbaikan Inventaris', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'no_permintaan',
            'tanggal',
            'uraian_kegiatan',
            'nip',
            'pelaksana',
            //'biaya',
            //'keterangan',
            //'status',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, PerbaikanInventaris $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'no_permintaan' => $model->no_permintaan]);
                 }
            ],
        ],
    ]); ?>


</div>
