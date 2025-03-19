<?php

use frontend\models\PenilaianMedisRalanTht;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var frontend\models\PenilaianMedisRalanThtSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Penilaian Medis Ralan Thts';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="penilaian-medis-ralan-tht-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Penilaian Medis Ralan Tht', ['create'], ['class' => 'btn btn-success']) ?>
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
            //'td',
            //'nadi',
            //'rr',
            //'suhu',
            //'bb',
            //'tb',
            //'nyeri',
            //'status_nutrisi',
            //'kondisi:ntext',
            //'ket_lokalis:ntext',
            //'lab:ntext',
            //'rad:ntext',
            //'tes_pendengaran:ntext',
            //'penunjang:ntext',
            //'diagnosis',
            //'diagnosisbanding',
            //'permasalahan:ntext',
            //'terapi:ntext',
            //'tindakan:ntext',
            //'tatalaksana:ntext',
            //'edukasi',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, PenilaianMedisRalanTht $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'no_rawat' => $model->no_rawat]);
                 }
            ],
        ],
    ]); ?>


</div>
