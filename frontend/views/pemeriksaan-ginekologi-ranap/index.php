<?php

use frontend\models\PemeriksaanGinekologiRanap;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var frontend\models\PemeriksaanGinekologiRanapSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Pemeriksaan Ginekologi Ranaps';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="pemeriksaan-ginekologi-ranap-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Pemeriksaan Ginekologi Ranap', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'no_rawat',
            'tgl_perawatan',
            'jam_rawat',
            'inspeksi',
            'inspeksi_vulva',
            //'inspekulo_gine',
            //'fluxus_gine',
            //'fluor_gine',
            //'vulva_inspekulo',
            //'portio_inspekulo',
            //'sondage',
            //'portio_dalam',
            //'bentuk',
            //'cavum_uteri',
            //'mobilitas',
            //'ukuran',
            //'nyeri_tekan',
            //'adnexa_kanan',
            //'adnexa_kiri',
            //'cavum_douglas',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, PemeriksaanGinekologiRanap $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'no_rawat' => $model->no_rawat, 'tgl_perawatan' => $model->tgl_perawatan, 'jam_rawat' => $model->jam_rawat]);
                 }
            ],
        ],
    ]); ?>


</div>
