<?php

use frontend\models\PasienCorona;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var frontend\models\PasienCoronaSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Pasien Coronas';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="pasien-corona-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Pasien Corona', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'no_pengenal',
            'no_rkm_medis',
            'inisial',
            'nama_lengkap',
            'tgl_masuk',
            //'kode_jk',
            //'nama_jk',
            //'tgl_lahir',
            //'kode_kewarganegaraan',
            //'nama_kewarganegaraan',
            //'kode_penularan',
            //'sumber_penularan',
            //'kd_kelurahan',
            //'nm_kelurahan',
            //'kd_kecamatan',
            //'nm_kecamatan',
            //'kd_kabupaten',
            //'nm_kabupaten',
            //'kd_propinsi',
            //'nm_propinsi',
            //'tgl_keluar',
            //'kode_statuskeluar',
            //'nama_statuskeluar',
            //'tgl_lapor',
            //'kode_statusrawat',
            //'nama_statusrawat',
            //'kode_statusisolasi',
            //'nama_statusisolasi',
            //'email:email',
            //'notelp',
            //'sebab_kematian',
            //'kode_jenis_pasien',
            //'nama_jenis_pasien',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, PasienCorona $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'no_rkm_medis' => $model->no_rkm_medis]);
                 }
            ],
        ],
    ]); ?>


</div>
