<?php

use frontend\models\SisruteRujukanKeluar;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var frontend\models\SisruteRujukanKeluarSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Sisrute Rujukan Keluars';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="sisrute-rujukan-keluar-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Sisrute Rujukan Keluar', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'no_rawat',
            'no_rujuk',
            'no_rkm_medis',
            'nm_pasien',
            'no_ktp',
            //'no_peserta',
            //'jk',
            //'tgl_lahir',
            //'tmp_lahir',
            //'alamat',
            //'no_tlp',
            //'jns_rujukan',
            //'tgl_rujuk',
            //'kd_faskes_tujuan',
            //'nm_faskes_tujuan',
            //'kd_alasan',
            //'alasan_rujuk',
            //'alasan_lainnya',
            //'kd_diagnosa',
            //'diagnosa_rujuk:ntext',
            //'nik_dokter',
            //'dokter_perujuk',
            //'nik_petugas',
            //'petugas_entry',
            //'anamnesis_pemeriksaan:ntext',
            //'kesadaran',
            //'tekanan_darah',
            //'nadi',
            //'suhu',
            //'respirasi',
            //'keadaan_umum:ntext',
            //'tingkat_nyeri',
            //'alergi',
            //'laboratorium:ntext',
            //'radiologi:ntext',
            //'terapitindakan:ntext',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, SisruteRujukanKeluar $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'no_rawat' => $model->no_rawat]);
                 }
            ],
        ],
    ]); ?>


</div>
