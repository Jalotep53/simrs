<?php

use frontend\models\Propinsi;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var frontend\models\PropinsiSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Propinsis';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="propinsi-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Propinsi', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'kd_prop',
            'nm_prop',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, Propinsi $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'kd_prop' => $model->kd_prop]);
                 }
            ],
        ],
    ]); ?>


</div>
