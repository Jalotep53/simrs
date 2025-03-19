<?php

use frontend\models\MetodeRacik;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var frontend\models\MetodeRacikSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Metode Raciks';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="metode-racik-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Metode Racik', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'kd_racik',
            'nm_racik',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, MetodeRacik $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'kd_racik' => $model->kd_racik]);
                 }
            ],
        ],
    ]); ?>


</div>
