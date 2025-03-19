<?php

use frontend\models\PasienBayi;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var frontend\models\PasienBayiSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Pasien Bayis';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="pasien-bayi-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Pasien Bayi', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'no_rkm_medis',
            'umur_ibu',
            'nama_ayah',
            'umur_ayah',
            'berat_badan',
            //'panjang_badan',
            //'lingkar_kepala',
            //'proses_lahir',
            //'anakke',
            //'jam_lahir',
            //'keterangan',
            //'diagnosa',
            //'penyulit_kehamilan',
            //'ketuban',
            //'lingkar_perut',
            //'lingkar_dada',
            //'penolong',
            //'no_skl',
            //'g',
            //'p',
            //'a',
            //'f1',
            //'u1',
            //'t1',
            //'r1',
            //'w1',
            //'n1',
            //'f5',
            //'u5',
            //'t5',
            //'r5',
            //'w5',
            //'n5',
            //'f10',
            //'u10',
            //'t10',
            //'r10',
            //'w10',
            //'n10',
            //'resusitas',
            //'obat_diberikan',
            //'mikasi',
            //'mikonium',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, PasienBayi $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'no_rkm_medis' => $model->no_rkm_medis]);
                 }
            ],
        ],
    ]); ?>


</div>
