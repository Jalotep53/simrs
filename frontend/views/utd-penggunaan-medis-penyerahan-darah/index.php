<?php

use frontend\models\UtdPenggunaanMedisPenyerahanDarah;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var frontend\models\UtdPenggunaanMedisPenyerahanDarahSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Utd Penggunaan Medis Penyerahan Darahs';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="utd-penggunaan-medis-penyerahan-darah-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Utd Penggunaan Medis Penyerahan Darah', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'no_penyerahan',
            'kode_brng',
            'jml',
            'harga',
            'total',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, UtdPenggunaanMedisPenyerahanDarah $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'no_penyerahan' => $model->no_penyerahan, 'kode_brng' => $model->kode_brng]);
                 }
            ],
        ],
    ]); ?>


</div>
