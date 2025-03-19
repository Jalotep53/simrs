<?php

use frontend\models\KeslingPemakaianAirPdam;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var frontend\models\KeslingPemakaianAirPdamSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Kesling Pemakaian Air Pdams';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="kesling-pemakaian-air-pdam-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Kesling Pemakaian Air Pdam', ['create'], ['class' => 'btn btn-success']) ?>
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
            'keterangan',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, KeslingPemakaianAirPdam $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'nip' => $model->nip, 'tanggal' => $model->tanggal]);
                 }
            ],
        ],
    ]); ?>


</div>
