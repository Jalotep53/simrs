<?php

use frontend\models\TemporaryGrafik;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var frontend\models\TemporaryGrafikSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Temporary Grafiks';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="temporary-grafik-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Temporary Grafik', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'no',
            'temp1',
            'temp2',
            'temp3',
            'temp4',
            //'temp5',
            //'temp6',
            //'temp7',
            //'temp8',
            //'temp9',
            //'temp10',
            //'temp11',
            //'temp12',
            //'temp13',
            //'temp14',
            //'temp15',
            //'temp16',
            //'temp17',
            //'temp18',
            //'temp19',
            //'temp20',
            //'temp21',
            //'temp22',
            //'temp23',
            //'temp24',
            //'temp25',
            //'temp26',
            //'temp27',
            //'temp28',
            //'temp29',
            //'temp30',
            //'temp31',
            //'temp32',
            //'temp33',
            //'temp34',
            //'temp35',
            //'temp36',
            //'temp37',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, TemporaryGrafik $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'no' => $model->no]);
                 }
            ],
        ],
    ]); ?>


</div>
