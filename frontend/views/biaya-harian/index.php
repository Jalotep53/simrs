<?php

use frontend\models\BiayaHarian;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var frontend\models\BiayaHarianSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Biaya Harians';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="biaya-harian-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Biaya Harian', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'kd_kamar',
            'nama_biaya',
            'besar_biaya',
            'jml',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, BiayaHarian $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'kd_kamar' => $model->kd_kamar, 'nama_biaya' => $model->nama_biaya]);
                 }
            ],
        ],
    ]); ?>


</div>
