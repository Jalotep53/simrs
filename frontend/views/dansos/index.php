<?php

use frontend\models\Dansos;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var frontend\models\DansosSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Dansos';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="dansos-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Dansos', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'dana',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, Dansos $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'dana' => $model->dana]);
                 }
            ],
        ],
    ]); ?>


</div>
