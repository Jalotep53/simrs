<?php

use frontend\models\PenilaianMedisRalanPenyakitDalam;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var frontend\models\PenilaianMedisRalanPenyakitDalamSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Penilaian Medis Ralan Penyakit Dalams';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="penilaian-medis-ralan-penyakit-dalam-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Penilaian Medis Ralan Penyakit Dalam', ['create'], ['class' => 'btn btn-success']) ?>
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
            //'rpo',
            //'alergi',
            //'kondisi',
            //'status',
            //'td',
            //'nadi',
            //'suhu',
            //'rr',
            //'bb',
            //'nyeri',
            //'gcs',
            //'kepala',
            //'keterangan_kepala',
            //'thoraks',
            //'keterangan_thorak',
            //'abdomen',
            //'keterangan_abdomen',
            //'ekstremitas',
            //'keterangan_ekstremitas',
            //'lainnya',
            //'lab',
            //'rad',
            //'penunjanglain',
            //'diagnosis',
            //'diagnosis2',
            //'permasalahan',
            //'terapi',
            //'tindakan',
            //'edukasi',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, PenilaianMedisRalanPenyakitDalam $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'no_rawat' => $model->no_rawat]);
                 }
            ],
        ],
    ]); ?>


</div>
