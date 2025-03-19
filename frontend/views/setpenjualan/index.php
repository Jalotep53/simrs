<?php

use frontend\models\Setpenjualan;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var frontend\models\SetpenjualanSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Setpenjualans';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="setpenjualan-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Setpenjualan', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'ralan',
            'kelas1',
            'kelas2',
            'kelas3',
            'utama',
            //'vip',
            //'vvip',
            //'beliluar',
            //'jualbebas',
            //'karyawan',
            //'kdjns',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, Setpenjualan $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'kdjns' => $model->kdjns]);
                 }
            ],
        ],
    ]); ?>


</div>
