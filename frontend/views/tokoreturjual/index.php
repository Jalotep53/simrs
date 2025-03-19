<?php

use frontend\models\Tokoreturjual;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var frontend\models\TokoreturjualSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Tokoreturjuals';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tokoreturjual-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Tokoreturjual', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'no_retur_jual',
            'tgl_retur',
            'nip',
            'no_member',
            'catatan',
            //'total',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, Tokoreturjual $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'no_retur_jual' => $model->no_retur_jual]);
                 }
            ],
        ],
    ]); ?>


</div>
