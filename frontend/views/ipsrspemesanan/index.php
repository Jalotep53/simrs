<?php

use frontend\models\Ipsrspemesanan;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var frontend\models\IpsrspemesananSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Ipsrspemesanans';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="ipsrspemesanan-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Ipsrspemesanan', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'no_faktur',
            'no_order',
            'kode_suplier',
            'nip',
            'tgl_pesan',
            //'tgl_faktur',
            //'tgl_tempo',
            //'total1',
            //'potongan',
            //'total2',
            //'ppn',
            //'meterai',
            //'tagihan',
            //'status',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, Ipsrspemesanan $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'no_faktur' => $model->no_faktur]);
                 }
            ],
        ],
    ]); ?>


</div>
