<?php

use frontend\models\LogDukcapilAceh;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var frontend\models\LogDukcapilAcehSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Log Dukcapil Acehs';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="log-dukcapil-aceh-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Log Dukcapil Aceh', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'no_ktp',
            'tanggal',
            'user',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, LogDukcapilAceh $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'no_ktp' => $model->no_ktp, 'tanggal' => $model->tanggal, 'user' => $model->user]);
                 }
            ],
        ],
    ]); ?>


</div>
