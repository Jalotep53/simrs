<?php

use frontend\models\PenilaianMedisRanap;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var frontend\models\PenilaianMedisRanapSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Penilaian Medis Ranaps';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="penilaian-medis-ranap-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Penilaian Medis Ranap', ['create'], ['class' => 'btn btn-success']) ?>
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
            //'ket_lokalis:ntext',
            //'lab:ntext',
            //'rad:ntext',
            //'penunjang:ntext',
            //'diagnosis',
            //'tata:ntext',
            //'edukasi',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, PenilaianMedisRanap $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'no_rawat' => $model->no_rawat]);
                 }
            ],
        ],
    ]); ?>


</div>
