<?php

use frontend\models\Spesialis;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var frontend\models\SpesialisSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Spesialis';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="spesialis-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Spesialis', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'kd_sps',
            'nm_sps',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, Spesialis $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'kd_sps' => $model->kd_sps]);
                 }
            ],
        ],
    ]); ?>


</div>
