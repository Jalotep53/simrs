<?php

use frontend\models\ParkirJenis;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var frontend\models\ParkirJenisSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Parkir Jenis';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="parkir-jenis-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Parkir Jenis', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'kd_parkir',
            'jns_parkir',
            'biaya',
            'jenis',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, ParkirJenis $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'kd_parkir' => $model->kd_parkir]);
                 }
            ],
        ],
    ]); ?>


</div>
