<?php

use frontend\models\SisaDietPasien;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var frontend\models\SisaDietPasienSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Sisa Diet Pasiens';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="sisa-diet-pasien-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Sisa Diet Pasien', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'no_rawat',
            'kd_kamar',
            'tanggal',
            'waktu',
            'karbohidrat',
            //'hewani',
            //'nabati',
            //'sayur',
            //'buah',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, SisaDietPasien $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'no_rawat' => $model->no_rawat, 'kd_kamar' => $model->kd_kamar, 'tanggal' => $model->tanggal, 'waktu' => $model->waktu]);
                 }
            ],
        ],
    ]); ?>


</div>
