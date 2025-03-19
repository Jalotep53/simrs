<?php

use frontend\models\PenilaianPasienPenyakitMenular;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var frontend\models\PenilaianPasienPenyakitMenularSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Penilaian Pasien Penyakit Menulars';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="penilaian-pasien-penyakit-menular-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Penilaian Pasien Penyakit Menular', ['create'], ['class' => 'btn btn-success']) ?>
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
            //'pasien_mengetahui_kondisi_penyakitnya',
            //'penyakit_sama_serumah',
            //'riwayat_kontak',
            //'keterangan_riwayat_kontak',
            //'transmisi_penularan_penyakit',
            //'keterangan_transmisi_penularan_penyakit',
            //'kebutuhan_ruang_rawat',
            //'keluhan_yang_dirasakan_saat_ini',
            //'riwayat_penyakit_keluarga',
            //'riwayat_alergi',
            //'riwayat_vaksinasi',
            //'riwayat_pengobatan',
            //'diagnosa_utama',
            //'diagnosa_tambahan',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, PenilaianPasienPenyakitMenular $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'no_rawat' => $model->no_rawat]);
                 }
            ],
        ],
    ]); ?>


</div>
