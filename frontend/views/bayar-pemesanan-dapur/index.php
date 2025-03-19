<?php

use frontend\models\BayarPemesananDapur;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var frontend\models\BayarPemesananDapurSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Bayar Pemesanan Dapurs';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="bayar-pemesanan-dapur-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Bayar Pemesanan Dapur', ['create'], ['class' => 'btn btn-success']) ?>
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
                'urlCreator' => function ($action, BayarPemesananDapur $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'tgl_bayar' => $model->tgl_bayar, 'no_faktur' => $model->no_faktur, 'no_bukti' => $model->no_bukti]);
                 }
            ],
        ],
    ]); ?>


</div>
