<?php

use frontend\models\PerencanaanPemulangan;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var frontend\models\PerencanaanPemulanganSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Perencanaan Pemulangans';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="perencanaan-pemulangan-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Perencanaan Pemulangan', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'no_rawat',
            'rencana_pulang',
            'alasan_masuk',
            'diagnosa_medis',
            'pengaruh_ri_pasien_dan_keluarga',
            //'keterangan_pengaruh_ri_pasien_dan_keluarga',
            //'pengaruh_ri_pekerjaan_sekolah',
            //'keterangan_pengaruh_ri_pekerjaan_sekolah',
            //'pengaruh_ri_keuangan',
            //'keterangan_pengaruh_ri_keuangan',
            //'antisipasi_masalah_saat_pulang',
            //'keterangan_antisipasi_masalah_saat_pulang',
            //'bantuan_diperlukan_dalam',
            //'keterangan_bantuan_diperlukan_dalam',
            //'adakah_yang_membantu_keperluan',
            //'keterangan_adakah_yang_membantu_keperluan',
            //'pasien_tinggal_sendiri',
            //'keterangan_pasien_tinggal_sendiri',
            //'pasien_menggunakan_peralatan_medis',
            //'keterangan_pasien_menggunakan_peralatan_medis',
            //'pasien_memerlukan_alat_bantu',
            //'keterangan_pasien_memerlukan_alat_bantu',
            //'memerlukan_perawatan_khusus',
            //'keterangan_memerlukan_perawatan_khusus',
            //'bermasalah_memenuhi_kebutuhan',
            //'keterangan_bermasalah_memenuhi_kebutuhan',
            //'memiliki_nyeri_kronis',
            //'keterangan_memiliki_nyeri_kronis',
            //'memerlukan_edukasi_kesehatan',
            //'keterangan_memerlukan_edukasi_kesehatan',
            //'memerlukan_keterampilkan_khusus',
            //'keterangan_memerlukan_keterampilkan_khusus',
            //'nama_pasien_keluarga',
            //'nip',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, PerencanaanPemulangan $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'no_rawat' => $model->no_rawat]);
                 }
            ],
        ],
    ]); ?>


</div>
