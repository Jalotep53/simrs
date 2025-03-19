<?php

use frontend\models\SatuSehatObservationttvbb;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var frontend\models\SatuSehatObservationttvbbSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Satu Sehat Observationttvbbs';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="satu-sehat-observationttvbb-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Satu Sehat Observationttvbb', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'no_rawat',
            'tgl_perawatan',
            'jam_rawat',
            'status',
            'id_observation',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, SatuSehatObservationttvbb $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'no_rawat' => $model->no_rawat, 'tgl_perawatan' => $model->tgl_perawatan, 'jam_rawat' => $model->jam_rawat, 'status' => $model->status]);
                 }
            ],
        ],
    ]); ?>


</div>
