<?php

use frontend\models\BayarPiutangLainlain;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var frontend\models\BayarPiutangLainlainSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Bayar Piutang Lainlains';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="bayar-piutang-lainlain-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Bayar Piutang Lainlain', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'tgl_bayar',
            'kode_peminjam',
            'besar_cicilan',
            'keterangan',
            'nota_piutang',
            //'kd_rek',
            //'nama_bayar',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, BayarPiutangLainlain $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'tgl_bayar' => $model->tgl_bayar, 'kode_peminjam' => $model->kode_peminjam, 'nota_piutang' => $model->nota_piutang, 'kd_rek' => $model->kd_rek, 'nama_bayar' => $model->nama_bayar]);
                 }
            ],
        ],
    ]); ?>


</div>
