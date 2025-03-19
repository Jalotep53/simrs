<?php

use frontend\models\PenilaianPasienImunitasRendah;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var frontend\models\PenilaianPasienImunitasRendahSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Penilaian Pasien Imunitas Rendahs';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="penilaian-pasien-imunitas-rendah-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Penilaian Pasien Imunitas Rendah', ['create'], ['class' => 'btn btn-success']) ?>
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
            //'kebutuhan_ruang_perawatan',
            //'riwayat_penyakit_keluhan',
            //'riwayat_penyakit_keluarga',
            //'riwayat_alergi',
            //'riwayat_vaksinasi',
            //'riwayat_pengobatan',
            //'diagnosa_utama',
            //'diagnosa_tambahan',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, PenilaianPasienImunitasRendah $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'no_rawat' => $model->no_rawat]);
                 }
            ],
        ],
    ]); ?>


</div>
