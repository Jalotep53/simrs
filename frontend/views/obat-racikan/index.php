<?php

use frontend\models\ObatRacikan;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var frontend\models\ObatRacikanSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Obat Racikans';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="obat-racikan-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Obat Racikan', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'tgl_perawatan',
            'jam',
            'no_rawat',
            'no_racik',
            'nama_racik',
            //'kd_racik',
            //'jml_dr',
            //'aturan_pakai',
            //'keterangan',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, ObatRacikan $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'tgl_perawatan' => $model->tgl_perawatan, 'jam' => $model->jam, 'no_rawat' => $model->no_rawat, 'no_racik' => $model->no_racik]);
                 }
            ],
        ],
    ]); ?>


</div>
