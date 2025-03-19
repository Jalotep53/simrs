<?php

use frontend\models\TemporaryPresensi;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var frontend\models\TemporaryPresensiSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Temporary Presensis';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="temporary-presensi-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Temporary Presensi', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'shift',
            'jam_datang',
            'jam_pulang',
            'status',
            //'keterlambatan',
            //'durasi',
            //'photo',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, TemporaryPresensi $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'id' => $model->id]);
                 }
            ],
        ],
    ]); ?>


</div>
