<?php

use frontend\models\PenilaianMedisRanapKandungan;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var frontend\models\PenilaianMedisRanapKandunganSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Penilaian Medis Ranap Kandungans';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="penilaian-medis-ranap-kandungan-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Penilaian Medis Ranap Kandungan', ['create'], ['class' => 'btn btn-success']) ?>
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
            //'jantung',
            //'paru',
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
            //'edukasi',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, PenilaianMedisRanapKandungan $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'no_rawat' => $model->no_rawat]);
                 }
            ],
        ],
    ]); ?>


</div>
