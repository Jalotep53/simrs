<?php

use frontend\models\PaketOperasi;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var frontend\models\PaketOperasiSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Paket Operasis';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="paket-operasi-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Paket Operasi', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'kode_paket',
            'nm_perawatan',
            'kategori',
            'operator1',
            'operator2',
            //'operator3',
            //'asisten_operator1',
            //'asisten_operator2',
            //'asisten_operator3',
            //'instrumen',
            //'dokter_anak',
            //'perawaat_resusitas',
            //'dokter_anestesi',
            //'asisten_anestesi',
            //'asisten_anestesi2',
            //'bidan',
            //'bidan2',
            //'bidan3',
            //'perawat_luar',
            //'sewa_ok',
            //'alat',
            //'akomodasi',
            //'bagian_rs',
            //'omloop',
            //'omloop2',
            //'omloop3',
            //'omloop4',
            //'omloop5',
            //'sarpras',
            //'dokter_pjanak',
            //'dokter_umum',
            //'kd_pj',
            //'status',
            //'kelas',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, PaketOperasi $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'kode_paket' => $model->kode_paket]);
                 }
            ],
        ],
    ]); ?>


</div>
