<?php

use frontend\models\Ipsrspembelian;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var frontend\models\IpsrspembelianSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Ipsrspembelians';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="ipsrspembelian-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Ipsrspembelian', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'no_faktur',
            'kode_suplier',
            'nip',
            'tgl_beli',
            'subtotal',
            //'potongan',
            //'total',
            //'ppn',
            //'meterai',
            //'tagihan',
            //'kd_rek',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, Ipsrspembelian $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'no_faktur' => $model->no_faktur]);
                 }
            ],
        ],
    ]); ?>


</div>
