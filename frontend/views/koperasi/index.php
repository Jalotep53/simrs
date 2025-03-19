<?php

use frontend\models\Koperasi;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var frontend\models\KoperasiSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Koperasis';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="koperasi-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Koperasi', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'stts',
            'wajib',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, Koperasi $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'stts' => $model->stts]);
                 }
            ],
        ],
    ]); ?>


</div>
