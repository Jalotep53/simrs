<?php

use frontend\models\Tracker;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var frontend\models\TrackerSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Trackers';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tracker-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Tracker', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'nip',
            'tgl_login',
            'jam_login',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, Tracker $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'nip' => $model->nip, 'tgl_login' => $model->tgl_login, 'jam_login' => $model->jam_login]);
                 }
            ],
        ],
    ]); ?>


</div>
