<?php

use frontend\models\PenilaianMedisRalanNeurologi;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var frontend\models\PenilaianMedisRalanNeurologiSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Penilaian Medis Ralan Neurologis';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="penilaian-medis-ralan-neurologi-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Penilaian Medis Ralan Neurologi', ['create'], ['class' => 'btn btn-success']) ?>
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
            //'kesadaran',
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
            //'keterangan_thoraks',
            //'abdomen',
            //'keterangan_abdomen',
            //'ekstremitas',
            //'keterangan_ekstremitas',
            //'columna',
            //'keterangan_columna',
            //'muskulos',
            //'keterangan_muskulos',
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
                'urlCreator' => function ($action, PenilaianMedisRalanNeurologi $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'no_rawat' => $model->no_rawat]);
                 }
            ],
        ],
    ]); ?>


</div>
