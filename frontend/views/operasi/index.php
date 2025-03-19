<?php

use frontend\models\Operasi;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var frontend\models\OperasiSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Operasis';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="operasi-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Operasi', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'no_rawat',
            'tgl_operasi',
            'jenis_anasthesi',
            'kategori',
            'operator1',
            //'operator2',
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
            //'omloop',
            //'omloop2',
            //'omloop3',
            //'omloop4',
            //'omloop5',
            //'dokter_pjanak',
            //'dokter_umum',
            //'kode_paket',
            //'biayaoperator1',
            //'biayaoperator2',
            //'biayaoperator3',
            //'biayaasisten_operator1',
            //'biayaasisten_operator2',
            //'biayaasisten_operator3',
            //'biayainstrumen',
            //'biayadokter_anak',
            //'biayaperawaat_resusitas',
            //'biayadokter_anestesi',
            //'biayaasisten_anestesi',
            //'biayaasisten_anestesi2',
            //'biayabidan',
            //'biayabidan2',
            //'biayabidan3',
            //'biayaperawat_luar',
            //'biayaalat',
            //'biayasewaok',
            //'akomodasi',
            //'bagian_rs',
            //'biaya_omloop',
            //'biaya_omloop2',
            //'biaya_omloop3',
            //'biaya_omloop4',
            //'biaya_omloop5',
            //'biayasarpras',
            //'biaya_dokter_pjanak',
            //'biaya_dokter_umum',
            //'status',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, Operasi $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'no_rawat' => $model->no_rawat, 'tgl_operasi' => $model->tgl_operasi, 'kode_paket' => $model->kode_paket]);
                 }
            ],
        ],
    ]); ?>


</div>
