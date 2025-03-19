<?php

use frontend\models\PersetujuanPenundaanPelayanan;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var frontend\models\PersetujuanPenundaanPelayananSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Persetujuan Penundaan Pelayanans';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="persetujuan-penundaan-pelayanan-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Persetujuan Penundaan Pelayanan', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'no_surat',
            'no_rawat',
            'tanggal',
            'nama_pj',
            'umur_pj',
            //'no_ktppj',
            //'alamatpj',
            //'no_telppj',
            //'hubungan',
            //'ruang',
            //'dokter_pengirim',
            //'pelayanan_dilakukan',
            //'ditunda_karena',
            //'keterangan_ditunda',
            //'alternatif_diberikan',
            //'keterangan_alternatif_diberikan',
            //'nip',
            //'kd_dokter',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, PersetujuanPenundaanPelayanan $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'no_surat' => $model->no_surat]);
                 }
            ],
        ],
    ]); ?>


</div>
