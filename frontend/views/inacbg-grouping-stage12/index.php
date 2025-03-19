<?php

use frontend\models\InacbgGroupingStage12;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var frontend\models\InacbgGroupingStage12Search $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Inacbg Grouping Stage12s';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="inacbg-grouping-stage12-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Inacbg Grouping Stage12', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'no_sep',
            'code_cbg',
            'deskripsi',
            'tarif',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, InacbgGroupingStage12 $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'no_sep' => $model->no_sep]);
                 }
            ],
        ],
    ]); ?>


</div>
