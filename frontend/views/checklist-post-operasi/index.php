<?php

use frontend\models\ChecklistPostOperasi;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var frontend\models\ChecklistPostOperasiSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Checklist Post Operasis';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="checklist-post-operasi-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Checklist Post Operasi', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'no_rawat',
            'tanggal',
            'sncn',
            'tindakan',
            'kd_dokter_bedah',
            //'kd_dokter_anestesi',
            //'keadaan_umum',
            //'pemeriksaan_penunjang_rontgen',
            //'keterangan_pemeriksaan_penunjang_rontgen',
            //'pemeriksaan_penunjang_ekg',
            //'keterangan_pemeriksaan_penunjang_ekg',
            //'pemeriksaan_penunjang_usg',
            //'keterangan_pemeriksaan_penunjang_usg',
            //'pemeriksaan_penunjang_ctscan',
            //'keterangan_pemeriksaan_penunjang_ctscan',
            //'pemeriksaan_penunjang_mri',
            //'keterangan_pemeriksaan_penunjang_mri',
            //'jenis_cairan_infus',
            //'kateter_urine',
            //'tanggal_pemasangan_kateter',
            //'warna_kateter',
            //'jumlah_kateter',
            //'area_luka_operasi',
            //'drain',
            //'jumlah_drain',
            //'letak_drain',
            //'warna_drain',
            //'jaringan_pa',
            //'nip_perawat_ok',
            //'nip_perawat_anestesi',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, ChecklistPostOperasi $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'no_rawat' => $model->no_rawat, 'tanggal' => $model->tanggal]);
                 }
            ],
        ],
    ]); ?>


</div>
