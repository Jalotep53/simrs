<?php

use frontend\models\PenatalaksanaanTerapiOkupasi;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var frontend\models\PenatalaksanaanTerapiOkupasiSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Penatalaksanaan Terapi Okupasis';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="penatalaksanaan-terapi-okupasi-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Penatalaksanaan Terapi Okupasi', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'no_rawat',
            'tanggal',
            'nip',
            'keluhan_utama',
            'rpd',
            //'rps',
            //'anamnesa_general',
            //'tanda_vital',
            //'pemeriksaan_penunjang',
            //'spesialisasi',
            //'keterangan_spesialisasi',
            //'pemeriksaan_okupasi_terapi',
            //'aset',
            //'limitasi',
            //'diagnosa_terapi_okupasi',
            //'rencana_intervensi',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, PenatalaksanaanTerapiOkupasi $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'no_rawat' => $model->no_rawat]);
                 }
            ],
        ],
    ]); ?>


</div>
