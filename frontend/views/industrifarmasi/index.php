<?php

use frontend\models\Industrifarmasi;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var frontend\models\IndustrifarmasiSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Industrifarmasis';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="industrifarmasi-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Industrifarmasi', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'kode_industri',
            'nama_industri',
            'alamat',
            'kota',
            'no_telp',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, Industrifarmasi $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'kode_industri' => $model->kode_industri]);
                 }
            ],
        ],
    ]); ?>


</div>
