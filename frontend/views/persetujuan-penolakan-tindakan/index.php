<?php

use frontend\models\PersetujuanPenolakanTindakan;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var frontend\models\PersetujuanPenolakanTindakanSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Persetujuan Penolakan Tindakans';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="persetujuan-penolakan-tindakan-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Persetujuan Penolakan Tindakan', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'no_pernyataan',
            'no_rawat',
            'tanggal',
            'diagnosa',
            'diagnosa_konfirmasi',
            //'tindakan',
            //'tindakan_konfirmasi',
            //'indikasi_tindakan',
            //'indikasi_tindakan_konfirmasi',
            //'tata_cara',
            //'tata_cara_konfirmasi',
            //'tujuan',
            //'tujuan_konfirmasi',
            //'risiko',
            //'risiko_konfirmasi',
            //'komplikasi',
            //'komplikasi_konfirmasi',
            //'prognosis',
            //'prognosis_konfirmasi',
            //'alternatif_dan_risikonya',
            //'alternatif_konfirmasi',
            //'biaya',
            //'biaya_konfirmasi',
            //'lain_lain',
            //'lain_lain_konfirmasi',
            //'kd_dokter',
            //'nip',
            //'penerima_informasi',
            //'alasan_diwakilkan_penerima_informasi',
            //'jk_penerima_informasi',
            //'tanggal_lahir_penerima_informasi',
            //'umur_penerima_informasi',
            //'alamat_penerima_informasi',
            //'no_hp',
            //'hubungan_penerima_informasi',
            //'pernyataan',
            //'saksi_keluarga',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, PersetujuanPenolakanTindakan $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'no_pernyataan' => $model->no_pernyataan]);
                 }
            ],
        ],
    ]); ?>


</div>
