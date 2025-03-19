<?php

use frontend\models\SetPjlab;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var frontend\models\SetPjlabSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Set Pjlabs';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="set-pjlab-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Set Pjlab', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'kd_dokterlab',
            'kd_dokterrad',
            'kd_dokterhemodialisa',
            'kd_dokterutd',
            'kd_dokterlabpa',
            //'kd_dokterlabmb',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, SetPjlab $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'kd_dokterlab' => $model->kd_dokterlab, 'kd_dokterrad' => $model->kd_dokterrad, 'kd_dokterhemodialisa' => $model->kd_dokterhemodialisa]);
                 }
            ],
        ],
    ]); ?>


</div>
