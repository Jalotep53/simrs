<?php

use frontend\models\PenilaianMedisRalanBedahMulut;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var frontend\models\PenilaianMedisRalanBedahMulutSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Penilaian Medis Ralan Bedah Muluts';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="penilaian-medis-ralan-bedah-mulut-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Penilaian Medis Ralan Bedah Mulut', ['create'], ['class' => 'btn btn-success']) ?>
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
            //'rpk',
            //'alergi',
            //'keadaan',
            //'kesadaran',
            //'nyeri',
            //'td',
            //'nadi',
            //'suhu',
            //'rr',
            //'bb',
            //'tb',
            //'status_nutrisi',
            //'kulit',
            //'keterangan_kulit',
            //'kepala',
            //'keterangan_kepala',
            //'mata',
            //'keterangan_mata',
            //'leher',
            //'keterangan_leher',
            //'kelenjar',
            //'keterangan_kelenjar',
            //'dada',
            //'keterangan_dada',
            //'perut',
            //'keterangan_perut',
            //'ekstremitas',
            //'keterangan_ekstremitas',
            //'wajah',
            //'intra',
            //'gigigeligi',
            //'lab',
            //'rad',
            //'penunjang',
            //'diagnosis',
            //'diagnosis2',
            //'permasalahan',
            //'terapi',
            //'tindakan',
            //'edukasi',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, PenilaianMedisRalanBedahMulut $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'no_rawat' => $model->no_rawat]);
                 }
            ],
        ],
    ]); ?>


</div>
