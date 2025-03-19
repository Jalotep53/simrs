<?php

use frontend\models\PenilaianPasienKeracunan;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var frontend\models\PenilaianPasienKeracunanSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Penilaian Pasien Keracunans';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="penilaian-pasien-keracunan-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Penilaian Pasien Keracunan', ['create'], ['class' => 'btn btn-success']) ?>
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
            //'tempat_kejadian',
            //'keterangan_tempat_kejadian',
            //'keluhan',
            //'riwayat_penyakit_sekarang',
            //'hamil',
            //'menyusui',
            //'penyebab',
            //'nama_bahan',
            //'jumlah_bahan',
            //'tipe_pemaparan',
            //'keterangan_tipe_pemaparan',
            //'tipe_kejadian',
            //'bau_bahan',
            //'keterangan_bau_bahan',
            //'pupil',
            //'keterangan_pupil',
            //'kesadaran',
            //'td',
            //'nadi',
            //'rr',
            //'suhu',
            //'spo',
            //'urine',
            //'pengobatan_sebelum_igd',
            //'diagnosis',
            //'pemeriksaan_penunjang',
            //'penatalaksanaan_diberikan',
            //'tindak_lanjut',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, PenilaianPasienKeracunan $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'no_rawat' => $model->no_rawat]);
                 }
            ],
        ],
    ]); ?>


</div>
