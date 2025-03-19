<?php

use frontend\models\Penjualan;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var frontend\models\PenjualanSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Penjualans';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="penjualan-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Penjualan', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'nota_jual',
            'tgl_jual',
            'nip',
            'no_rkm_medis',
            'nm_pasien',
            //'keterangan',
            //'jns_jual',
            //'ongkir',
            //'ppn',
            //'status',
            //'kd_bangsal',
            //'kd_rek',
            //'nama_bayar',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, Penjualan $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'nota_jual' => $model->nota_jual]);
                 }
            ],
        ],
    ]); ?>


</div>
