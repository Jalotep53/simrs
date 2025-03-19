<?php

use frontend\models\ResepLuar;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var frontend\models\ResepLuarSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Resep Luars';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="resep-luar-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Resep Luar', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'no_resep',
            'tgl_perawatan',
            'jam',
            'no_rawat',
            'kd_dokter',
            //'tgl_peresepan',
            //'jam_peresepan',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, ResepLuar $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'no_resep' => $model->no_resep]);
                 }
            ],
        ],
    ]); ?>


</div>
