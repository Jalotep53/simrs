<?php

use frontend\models\PeriksaRadiologi;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var frontend\models\PeriksaRadiologiSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Periksa Radiologis';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="periksa-radiologi-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Periksa Radiologi', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'no_rawat',
            'nip',
            'kd_jenis_prw',
            'tgl_periksa',
            'jam',
            //'dokter_perujuk',
            //'bagian_rs',
            //'bhp',
            //'tarif_perujuk',
            //'tarif_tindakan_dokter',
            //'tarif_tindakan_petugas',
            //'kso',
            //'menejemen',
            //'biaya',
            //'kd_dokter',
            //'status',
            //'proyeksi',
            //'kV',
            //'mAS',
            //'FFD',
            //'BSF',
            //'inak',
            //'jml_penyinaran',
            //'dosis',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, PeriksaRadiologi $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'no_rawat' => $model->no_rawat, 'kd_jenis_prw' => $model->kd_jenis_prw, 'tgl_periksa' => $model->tgl_periksa, 'jam' => $model->jam]);
                 }
            ],
        ],
    ]); ?>


</div>
