<?php

use frontend\models\SkdpBpjs;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var frontend\models\SkdpBpjsSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Skdp Bpjs';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="skdp-bpjs-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Skdp Bpjs', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'tahun',
            'no_rkm_medis',
            'diagnosa',
            'terapi',
            'alasan1',
            //'alasan2',
            //'rtl1',
            //'rtl2',
            //'tanggal_datang',
            //'tanggal_rujukan',
            //'no_antrian',
            //'kd_dokter',
            //'status',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, SkdpBpjs $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'tahun' => $model->tahun, 'no_antrian' => $model->no_antrian]);
                 }
            ],
        ],
    ]); ?>


</div>
