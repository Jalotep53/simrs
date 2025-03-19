<?php

use frontend\models\SttsKerja;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var frontend\models\SttsKerjaSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Stts Kerjas';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="stts-kerja-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Stts Kerja', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'stts',
            'ktg',
            'indek',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, SttsKerja $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'stts' => $model->stts]);
                 }
            ],
        ],
    ]); ?>


</div>
