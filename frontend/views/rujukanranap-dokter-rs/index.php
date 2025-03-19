<?php

use frontend\models\RujukanranapDokterRs;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var frontend\models\RujukanranapDokterRsSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Rujukanranap Dokter Rs';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="rujukanranap-dokter-rs-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Rujukanranap Dokter Rs', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'tanggal',
            'kd_dokter',
            'no_rkm_medis',
            'kd_kamar',
            'jasarujuk',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, RujukanranapDokterRs $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'tanggal' => $model->tanggal, 'kd_dokter' => $model->kd_dokter, 'no_rkm_medis' => $model->no_rkm_medis, 'kd_kamar' => $model->kd_kamar]);
                 }
            ],
        ],
    ]); ?>


</div>
