<?php

use frontend\models\ClosingKasir;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var frontend\models\ClosingKasirSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Closing Kasirs';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="closing-kasir-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Closing Kasir', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'shift',
            'jam_masuk',
            'jam_pulang',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, ClosingKasir $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'shift' => $model->shift]);
                 }
            ],
        ],
    ]); ?>


</div>
