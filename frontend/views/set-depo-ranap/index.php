<?php

use frontend\models\SetDepoRanap;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var frontend\models\SetDepoRanapSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Set Depo Ranaps';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="set-depo-ranap-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Set Depo Ranap', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'kd_bangsal',
            'kd_depo',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, SetDepoRanap $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'kd_bangsal' => $model->kd_bangsal, 'kd_depo' => $model->kd_depo]);
                 }
            ],
        ],
    ]); ?>


</div>
