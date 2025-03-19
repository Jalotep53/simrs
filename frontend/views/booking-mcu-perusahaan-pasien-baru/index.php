<?php

use frontend\models\BookingMcuPerusahaanPasienBaru;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var frontend\models\BookingMcuPerusahaanPasienBaruSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Booking Mcu Perusahaan Pasien Barus';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="booking-mcu-perusahaan-pasien-baru-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Booking Mcu Perusahaan Pasien Baru', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'no_pengajuan',
            'nm_pasien',
            'no_ktp',
            'jk',
            'tmp_lahir',
            //'tgl_lahir',
            //'nm_ibu',
            //'alamat',
            //'kelurahan',
            //'kecamatan',
            //'kabupaten',
            //'propinsi',
            //'gol_darah',
            //'pekerjaan',
            //'stts_nikah',
            //'agama',
            //'tgl_mcu',
            //'no_tlp',
            //'umur',
            //'pnd',
            //'keluarga',
            //'namakeluarga',
            //'pekerjaanpj',
            //'alamatpj',
            //'kelurahanpj',
            //'kecamatanpj',
            //'kabupatenpj',
            //'propinsipj',
            //'perusahaan_pasien',
            //'suku_bangsa',
            //'bahasa_pasien',
            //'cacat_fisik',
            //'email:email',
            //'nip',
            //'status',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, BookingMcuPerusahaanPasienBaru $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'no_pengajuan' => $model->no_pengajuan]);
                 }
            ],
        ],
    ]); ?>


</div>
