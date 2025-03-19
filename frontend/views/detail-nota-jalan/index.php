<?php

use frontend\models\DetailNotaJalan;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var frontend\models\DetailNotaJalanSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Detail Nota Jalans';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="detail-nota-jalan-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Detail Nota Jalan', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'no_rawat',
            'nama_bayar',
            'besarppn',
            'besar_bayar',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, DetailNotaJalan $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'no_rawat' => $model->no_rawat, 'nama_bayar' => $model->nama_bayar]);
                 }
            ],
        ],
    ]); ?>


</div>
