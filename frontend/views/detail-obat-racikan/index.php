<?php

use frontend\models\DetailObatRacikan;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var frontend\models\DetailObatRacikanSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Detail Obat Racikans';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="detail-obat-racikan-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Detail Obat Racikan', ['create'], ['class' => 'btn btn-success']) ?>
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
            'kode_brng',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, DetailObatRacikan $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'tgl_perawatan' => $model->tgl_perawatan, 'jam' => $model->jam, 'no_rawat' => $model->no_rawat, 'no_racik' => $model->no_racik, 'kode_brng' => $model->kode_brng]);
                 }
            ],
        ],
    ]); ?>


</div>
