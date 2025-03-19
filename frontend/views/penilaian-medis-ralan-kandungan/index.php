<?php

use frontend\models\PenilaianMedisRalanKandungan;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var frontend\models\PenilaianMedisRalanKandunganSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Penilaian Medis Ralan Kandungans';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="penilaian-medis-ralan-kandungan-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Penilaian Medis Ralan Kandungan', ['create'], ['class' => 'btn btn-success']) ?>
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
            //'tht',
            //'thoraks',
            //'abdomen',
            //'genital',
            //'ekstremitas',
            //'kulit',
            //'ket_fisik:ntext',
            //'tfu',
            //'tbj',
            //'his',
            //'kontraksi',
            //'djj',
            //'inspeksi:ntext',
            //'inspekulo:ntext',
            //'vt:ntext',
            //'rt:ntext',
            //'ultra:ntext',
            //'kardio:ntext',
            //'lab:ntext',
            //'diagnosis',
            //'tata:ntext',
            //'konsul',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, PenilaianMedisRalanKandungan $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'no_rawat' => $model->no_rawat]);
                 }
            ],
        ],
    ]); ?>


</div>
