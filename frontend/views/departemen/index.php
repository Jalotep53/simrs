<?php

use frontend\models\Departemen;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var frontend\models\DepartemenSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Departemens';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="departemen-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Departemen', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'dep_id',
            'nama',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, Departemen $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'dep_id' => $model->dep_id]);
                 }
            ],
        ],
    ]); ?>


</div>
