<?php

use frontend\models\SetHariLibur;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var frontend\models\SetHariLiburSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Set Hari Liburs';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="set-hari-libur-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Set Hari Libur', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'tanggal',
            'ktg',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, SetHariLibur $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'tanggal' => $model->tanggal]);
                 }
            ],
        ],
    ]); ?>


</div>
