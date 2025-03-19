<?php

use frontend\models\PermintaanLabpa;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var frontend\models\PermintaanLabpaSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Permintaan Labpas';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="permintaan-labpa-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Permintaan Labpa', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'noorder',
            'no_rawat',
            'tgl_permintaan',
            'jam_permintaan',
            'tgl_sampel',
            //'jam_sampel',
            //'tgl_hasil',
            //'jam_hasil',
            //'dokter_perujuk',
            //'status',
            //'informasi_tambahan',
            //'diagnosa_klinis',
            //'pengambilan_bahan',
            //'diperoleh_dengan',
            //'lokasi_jaringan',
            //'diawetkan_dengan',
            //'pernah_dilakukan_di',
            //'tanggal_pa_sebelumnya',
            //'nomor_pa_sebelumnya',
            //'diagnosa_pa_sebelumnya',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, PermintaanLabpa $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'noorder' => $model->noorder]);
                 }
            ],
        ],
    ]); ?>


</div>
