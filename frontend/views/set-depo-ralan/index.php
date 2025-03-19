<?php

use frontend\models\SetDepoRalan;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var frontend\models\SetDepoRalanSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Set Depo Ralans';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="set-depo-ralan-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Set Depo Ralan', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'kd_poli',
            'kd_bangsal',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, SetDepoRalan $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'kd_poli' => $model->kd_poli, 'kd_bangsal' => $model->kd_bangsal]);
                 }
            ],
        ],
    ]); ?>


</div>
