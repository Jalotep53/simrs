<?php

use frontend\models\Tampbeli1;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var frontend\models\Tampbeli1Search $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Tampbeli1s';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tampbeli1-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Tampbeli1', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'kode_brng',
            'nama_brng',
            'satuan',
            'satuan_stok',
            'h_beli',
            //'jumlah',
            //'jumlah_stok',
            //'total',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, Tampbeli1 $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'kode_brng' => $model->kode_brng]);
                 }
            ],
        ],
    ]); ?>


</div>
