<?php

use frontend\models\Ketidakhadiran;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var frontend\models\KetidakhadiranSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Ketidakhadirans';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="ketidakhadiran-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Ketidakhadiran', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'tgl',
            'id',
            'jns',
            'ktg',
            'jml',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, Ketidakhadiran $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'tgl' => $model->tgl, 'id' => $model->id, 'jns' => $model->jns]);
                 }
            ],
        ],
    ]); ?>


</div>
