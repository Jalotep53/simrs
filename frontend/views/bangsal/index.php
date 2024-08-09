<?php

use frontend\models\Bangsal;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var frontend\models\BangsalSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Bangsals';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="bangsal-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Bangsal', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'kd_bangsal',
            'nm_bangsal',
            'status',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, Bangsal $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'kd_bangsal' => $model->kd_bangsal]);
                 }
            ],
        ],
    ]); ?>


</div>
