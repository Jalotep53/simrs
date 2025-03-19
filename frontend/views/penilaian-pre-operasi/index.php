<?php

use frontend\models\PenilaianPreOperasi;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var frontend\models\PenilaianPreOperasiSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Penilaian Pre Operasis';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="penilaian-pre-operasi-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Penilaian Pre Operasi', ['create'], ['class' => 'btn btn-success']) ?>
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
            'ringkasan_klinik',
            'pemeriksaan_fisik',
            //'pemeriksaan_diagnostik',
            //'diagnosa_pre_operasi',
            //'rencana_tindakan_bedah',
            //'hal_hal_yang_perludi_persiapkan',
            //'terapi_pre_operasi',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, PenilaianPreOperasi $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'no_rawat' => $model->no_rawat, 'tanggal' => $model->tanggal]);
                 }
            ],
        ],
    ]); ?>


</div>
