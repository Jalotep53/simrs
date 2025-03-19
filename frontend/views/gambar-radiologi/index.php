<?php

use frontend\models\GambarRadiologi;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var frontend\models\GambarRadiologiSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Gambar Radiologis';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="gambar-radiologi-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Gambar Radiologi', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'no_rawat',
            'tgl_periksa',
            'jam',
            'lokasi_gambar',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, GambarRadiologi $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'no_rawat' => $model->no_rawat, 'tgl_periksa' => $model->tgl_periksa, 'jam' => $model->jam, 'lokasi_gambar' => $model->lokasi_gambar]);
                 }
            ],
        ],
    ]); ?>


</div>
