<?php

use frontend\models\SetHadir;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var frontend\models\SetHadirSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Set Hadirs';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="set-hadir-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Set Hadir', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'tnj',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, SetHadir $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'tnj' => $model->tnj]);
                 }
            ],
        ],
    ]); ?>


</div>
