<?php

use frontend\models\JamMasuk;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var frontend\models\JamMasukSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Jam Masuks';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="jam-masuk-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Jam Masuk', ['create'], ['class' => 'btn btn-success']) ?>
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
                'urlCreator' => function ($action, JamMasuk $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'shift' => $model->shift]);
                 }
            ],
        ],
    ]); ?>


</div>
