<?php

use frontend\models\K3rsPeristiwa;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var frontend\models\K3rsPeristiwaSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'K3rs Peristiwas';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="k3rs-peristiwa-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create K3rs Peristiwa', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'no_k3rs',
            'tgl_insiden',
            'waktu_insiden',
            'kode_pekerjaan',
            'tgl_pelaporan',
            //'waktu_pelaporan',
            //'kode_lokasi',
            //'kronologi_kejadian',
            //'kode_penyebab',
            //'nik',
            //'kategori_cidera',
            //'kode_cidera',
            //'kode_luka',
            //'kode_bagian',
            //'lt',
            //'penyebab_langsung_kondisi',
            //'penyebab_langsung_tindakan',
            //'penyebab_tidak_langsung_pribadi',
            //'penyebab_tidak_langsung_pekerjaan',
            //'barang_bukti',
            //'kode_dampak',
            //'nik_pelapor',
            //'perbaikan_jenis_tindakan',
            //'perbaikan_rencana_tindakan',
            //'perbaikan_target',
            //'perbaikan_wewenang',
            //'nik_timk3',
            //'catatan',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, K3rsPeristiwa $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'no_k3rs' => $model->no_k3rs]);
                 }
            ],
        ],
    ]); ?>


</div>
