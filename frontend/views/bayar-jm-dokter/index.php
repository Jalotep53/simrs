<?php

use frontend\models\BayarJmDokter;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var frontend\modelsBayarJmDokterSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Bayar Jm Dokters';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="bayar-jm-dokter-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Bayar Jm Dokter', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'no_bayar',
            'tanggal',
            'kd_dokter',
            'besar_bayar',
            'nama_bayar',
            //'keterangan',
            //'rawatjalan',
            //'rawatinap',
            //'labrawatjalan',
            //'labrawatinap',
            //'radrawatjalan',
            //'radrawatinap',
            //'operasiralan',
            //'operasiranap',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, BayarJmDokter $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'no_bayar' => $model->no_bayar]);
                 }
            ],
        ],
    ]); ?>


</div>
