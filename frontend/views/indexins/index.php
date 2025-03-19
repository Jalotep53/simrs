<?php

use frontend\models\Indexins;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var frontend\models\IndexinsSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Indexins';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="indexins-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Indexins', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'dep_id',
            'persen',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, Indexins $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'dep_id' => $model->dep_id]);
                 }
            ],
        ],
    ]); ?>


</div>
