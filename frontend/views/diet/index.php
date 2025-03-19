<?php

use frontend\models\Diet;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var frontend\models\DietSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Diets';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="diet-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Diet', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'kd_diet',
            'nama_diet',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, Diet $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'kd_diet' => $model->kd_diet]);
                 }
            ],
        ],
    ]); ?>


</div>
