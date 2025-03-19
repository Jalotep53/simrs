<?php

use frontend\models\TransferPasienAntarRuang;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var frontend\models\TransferPasienAntarRuangSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Transfer Pasien Antar Ruangs';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="transfer-pasien-antar-ruang-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Transfer Pasien Antar Ruang', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'no_rawat',
            'tanggal_masuk',
            'tanggal_pindah',
            'asal_ruang',
            'ruang_selanjutnya',
            //'diagnosa_utama',
            //'diagnosa_sekunder',
            //'indikasi_pindah_ruang',
            //'keterangan_indikasi_pindah_ruang',
            //'prosedur_yang_sudah_dilakukan',
            //'obat_yang_telah_diberikan',
            //'metode_pemindahan_pasien',
            //'peralatan_yang_menyertai',
            //'keterangan_peralatan_yang_menyertai',
            //'pemeriksaan_penunjang_yang_dilakukan',
            //'pasien_keluarga_menyetujui',
            //'nama_menyetujui',
            //'hubungan_menyetujui',
            //'keluhan_utama_sebelum_transfer',
            //'keadaan_umum_sebelum_transfer',
            //'td_sebelum_transfer',
            //'nadi_sebelum_transfer',
            //'rr_sebelum_transfer',
            //'suhu_sebelum_transfer',
            //'keluhan_utama_sesudah_transfer',
            //'keadaan_umum_sesudah_transfer',
            //'td_sesudah_transfer',
            //'nadi_sesudah_transfer',
            //'rr_sesudah_transfer',
            //'suhu_sesudah_transfer',
            //'nip_menyerahkan',
            //'nip_menerima',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, TransferPasienAntarRuang $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'no_rawat' => $model->no_rawat, 'tanggal_masuk' => $model->tanggal_masuk]);
                 }
            ],
        ],
    ]); ?>


</div>
