<?php

use frontend\models\InacbgDataTerkirim2;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var frontend\models\InacbgDataTerkirim2Search $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Inacbg Data Terkirim2s';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="inacbg-data-terkirim2-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Inacbg Data Terkirim2', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'no_sep',
            'nik',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, InacbgDataTerkirim2 $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'no_sep' => $model->no_sep]);
                 }
            ],
        ],
    ]); ?>


</div>
