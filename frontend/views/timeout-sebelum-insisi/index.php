<?php

use frontend\models\TimeoutSebelumInsisi;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var frontend\models\TimeoutSebelumInsisiSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Timeout Sebelum Insisis';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="timeout-sebelum-insisi-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Timeout Sebelum Insisi', ['create'], ['class' => 'btn btn-success']) ?>
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
            //'verbal_identitas',
            //'verbal_tindakan',
            //'verbal_area_insisi',
            //'penandaan_area_operasi',
            //'lama_operasi',
            //'penayangan_radiologi',
            //'penayangan_ctscan',
            //'penayangan_mri',
            //'antibiotik_profilaks',
            //'nama_antibiotik',
            //'jam_pemberian',
            //'antisipasi_kehilangan_darah',
            //'hal_khusus',
            //'hal_khusus_diperhatikan',
            //'tanggal_steril',
            //'petujuk_sterilisasi',
            //'verifikasi_preoperatif',
            //'nip_perawat_ok',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, TimeoutSebelumInsisi $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'no_rawat' => $model->no_rawat, 'tanggal' => $model->tanggal]);
                 }
            ],
        ],
    ]); ?>


</div>
