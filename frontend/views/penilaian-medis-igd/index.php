<?php

use frontend\models\PenilaianMedisIgd;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var frontend\models\PenilaianMedisIgdSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Penilaian Medis Igds';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="penilaian-medis-igd-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Penilaian Medis Igd', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'no_rawat',
            'tanggal',
            'kd_dokter',
            'anamnesis',
            'hubungan',
            //'keluhan_utama',
            //'rps',
            //'rpd',
            //'rpk',
            //'rpo',
            //'alergi',
            //'keadaan',
            //'gcs',
            //'kesadaran',
            //'td',
            //'nadi',
            //'rr',
            //'suhu',
            //'spo',
            //'bb',
            //'tb',
            //'kepala',
            //'mata',
            //'gigi',
            //'leher',
            //'thoraks',
            //'abdomen',
            //'genital',
            //'ekstremitas',
            //'ket_fisik:ntext',
            //'ket_lokalis:ntext',
            //'ekg:ntext',
            //'rad:ntext',
            //'lab:ntext',
            //'diagnosis',
            //'tata:ntext',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, PenilaianMedisIgd $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'no_rawat' => $model->no_rawat]);
                 }
            ],
        ],
    ]); ?>


</div>
