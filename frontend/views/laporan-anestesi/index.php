<?php

use frontend\models\LaporanAnestesi;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var frontend\models\LaporanAnestesiSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Laporan Anestesis';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="laporan-anestesi-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Laporan Anestesi', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'no_rawat',
            'mulai',
            'selesai',
            'tempat_pemantauan',
            'tindakan_operasi',
            //'operator1',
            //'asisten_operator',
            //'dokter_anestesi',
            //'operator2',
            //'onloop',
            //'penata_anestesi',
            //'diagnosa_preop',
            //'diagnosa_postop',
            //'status_asa',
            //'karena',
            //'premedikasi',
            //'ttv_premedikasi_td',
            //'ttv_premedikasi_rr',
            //'ttv_premedikasi_hr',
            //'ttv_premedikasi_spo2',
            //'ttv_premedikasi_ekg',
            //'ttv_premedikasi_suhu',
            //'ttv_premedikasi_lain',
            //'lama_operasi',
            //'lama_anastesi',
            //'keadaan_umum_bb',
            //'keadaan_umum_tb',
            //'keadaan_umum_alergi',
            //'keadaan_umum_malampathy',
            //'keadaan_umum_e',
            //'keadaan_umum_v',
            //'keadaan_umum_m',
            //'jenis_anestesi_lokasi',
            //'jenis_anestesi_sedasi',
            //'jenis_anestesi_regional',
            //'jenis_anestesi_ga_ett',
            //'jenis_anestesi_ga_ntt',
            //'jenis_anestesi_ga_ema',
            //'jenis_anestesi_ga_bm',
            //'posisi',
            //'perdarahan',
            //'urine',
            //'komplikasi',
            //'ekstubasi',
            //'jumlah_pack',
            //'dipindahkan_ke',
            //'serah_terima_pasien',
            //'catatan',
            //'nip_recovery_room',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, LaporanAnestesi $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'no_rawat' => $model->no_rawat, 'mulai' => $model->mulai]);
                 }
            ],
        ],
    ]); ?>


</div>
