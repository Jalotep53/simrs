<?php

use frontend\models\PenilaianTambahanGeriatri;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var frontend\models\PenilaianTambahanGeriatriSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Penilaian Tambahan Geriatris';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="penilaian-tambahan-geriatri-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Penilaian Tambahan Geriatri', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'no_rawat',
            'tanggal',
            'nik',
            'asal_masuk',
            'kondisi_masuk',
            //'keterangan_kondisi_masuk',
            //'anamnesis',
            //'diagnosa_medis',
            //'riwayat_immuno_telinga',
            //'riwayat_immuno_sinus',
            //'riwayat_immuno_antibiotik',
            //'riwayat_immuno_pneumonia',
            //'riwayat_immuno_abses',
            //'riwayat_immuno_sariawan',
            //'riwayat_immuno_memerlukan_antibiotik',
            //'riwayat_immuno_infeksi_dalam',
            //'riwayat_immuno_immunodefisiensi_primer',
            //'riwayat_immuno_jenis_kangker',
            //'riwayat_immuno_infeksi_oportunistik',
            //'pola_aktifitas_tidur',
            //'keterangan_pola_aktifitas_tidur',
            //'pola_aktifitas_obat_tidur',
            //'keterangan_pola_aktifitas_obat_tidur',
            //'pola_aktifitas_olahraga',
            //'keterangan_pola_aktifitas_olahraga',
            //'kualitas_hidup_mobilitas',
            //'kualitas_hidup_perawatan_diri',
            //'kualitas_hidup_aktifitas_seharihari',
            //'kualitas_hidup_rasa_nyeri',
            //'skala_nyeri',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, PenilaianTambahanGeriatri $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'no_rawat' => $model->no_rawat]);
                 }
            ],
        ],
    ]); ?>


</div>
