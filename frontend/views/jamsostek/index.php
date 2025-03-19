<?php

use frontend\models\Jamsostek;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var frontend\models\JamsostekSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Jamsosteks';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="jamsostek-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Jamsostek', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'stts',
            'biaya',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, Jamsostek $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'stts' => $model->stts]);
                 }
            ],
        ],
    ]); ?>


</div>
