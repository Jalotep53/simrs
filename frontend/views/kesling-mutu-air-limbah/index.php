<?php

use frontend\models\KeslingMutuAirLimbah;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var frontend\models\KeslingMutuAirLimbahSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Kesling Mutu Air Limbahs';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="kesling-mutu-air-limbah-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Kesling Mutu Air Limbah', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'nip',
            'tanggal',
            'meteran',
            'jumlahharian',
            'ph',
            //'suhu',
            //'tds',
            //'ec',
            //'salt',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, KeslingMutuAirLimbah $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'nip' => $model->nip, 'tanggal' => $model->tanggal]);
                 }
            ],
        ],
    ]); ?>


</div>
