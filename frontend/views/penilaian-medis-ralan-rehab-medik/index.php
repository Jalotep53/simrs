<?php

use frontend\models\PenilaianMedisRalanRehabMedik;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var frontend\models\PenilaianMedisRalanRehabMedikSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Penilaian Medis Ralan Rehab Mediks';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="penilaian-medis-ralan-rehab-medik-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Penilaian Medis Ralan Rehab Medik', ['create'], ['class' => 'btn btn-success']) ?>
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
            //'alergi',
            //'kesadaran',
            //'nyeri',
            //'skala_nyeri',
            //'td',
            //'nadi',
            //'suhu',
            //'rr',
            //'bb',
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
            //'resiko_jatuh',
            //'resiko_nutrisional',
            //'kebutuhan_fungsional',
            //'diagnosa_medis',
            //'diagnosa_fungsi',
            //'penunjang_lain',
            //'fisio',
            //'okupasi',
            //'wicara',
            //'akupuntur',
            //'tatalain',
            //'frekuensi_terapi',
            //'fisioterapi',
            //'terapi_okupasi',
            //'terapi_wicara',
            //'terapi_akupuntur',
            //'terapi_lainnya',
            //'edukasi',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, PenilaianMedisRalanRehabMedik $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'no_rawat' => $model->no_rawat]);
                 }
            ],
        ],
    ]); ?>


</div>
