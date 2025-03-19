<?php

use frontend\models\PenilaianMedisRalanOrthopedi;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var frontend\models\PenilaianMedisRalanOrthopediSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Penilaian Medis Ralan Orthopedis';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="penilaian-medis-ralan-orthopedi-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Penilaian Medis Ralan Orthopedi', ['create'], ['class' => 'btn btn-success']) ?>
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
            //'thoraks',
            //'abdomen',
            //'ekstremitas',
            //'genetalia',
            //'columna',
            //'muskulos',
            //'lainnya',
            //'ket_lokalis:ntext',
            //'lab',
            //'rad',
            //'pemeriksaan',
            //'diagnosis',
            //'diagnosis2',
            //'permasalahan',
            //'terapi',
            //'tindakan',
            //'edukasi',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, PenilaianMedisRalanOrthopedi $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'no_rawat' => $model->no_rawat]);
                 }
            ],
        ],
    ]); ?>


</div>
