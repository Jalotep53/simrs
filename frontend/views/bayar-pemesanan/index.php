<?php

use frontend\models\BayarPemesanan;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var frontend\models\BayarPemesananSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Bayar Pemesanans';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="bayar-pemesanan-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Bayar Pemesanan', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'tgl_bayar',
            'no_faktur',
            'nip',
            'besar_bayar',
            'keterangan',
            //'nama_bayar',
            //'no_bukti',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, BayarPemesanan $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'tgl_bayar' => $model->tgl_bayar, 'no_faktur' => $model->no_faktur, 'no_bukti' => $model->no_bukti]);
                 }
            ],
        ],
    ]); ?>


</div>
