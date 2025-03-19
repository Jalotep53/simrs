<?php

use frontend\models\Subrekening;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var frontend\models\SubrekeningSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Subrekenings';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="subrekening-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Subrekening', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'kd_rek',
            'kd_rek2',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, Subrekening $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'kd_rek2' => $model->kd_rek2]);
                 }
            ],
        ],
    ]); ?>


</div>
