<?php

use frontend\models\Tokopenjualan;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var frontend\models\TokopenjualanSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Tokopenjualans';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tokopenjualan-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Tokopenjualan', ['create'], ['class' => 'btn btn-success']) ?>
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
            'no_member',
            'nm_member',
            //'keterangan',
            //'jns_jual',
            //'ongkir',
            //'ppn',
            //'kd_rek',
            //'total',
            //'nama_bayar',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, Tokopenjualan $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'nota_jual' => $model->nota_jual]);
                 }
            ],
        ],
    ]); ?>


</div>
