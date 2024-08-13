<?php

use frontend\models\RegPeriksa;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var frontend\models\RegPeriksaSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Rawat Inap';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="reg-periksa-index">

    <h1><?= Html::encode($this->title) ?></h1>

<!--    <p>
        <?= Html::a('Create Reg Periksa', ['create'], ['class' => 'btn btn-success']) ?>
    </p>-->

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider2,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn',
                'contentOptions' => ['style' => 'width:20px; white-space: normal;'],
                ],
            
         
            [
                'attribute'=>'no_rawat',
                'contentOptions' => ['style' => 'width:50px; white-space: normal;'],
            ],
            [
                'label' => 'Kamar',
                'contentOptions' => ['style' => 'width:200px; white-space: normal;'],
                'value'=>function($model) { 
                     return $model->getNamaKamar($model->no_rawat);
                },
            ],
            [
                'label' => 'Tanggal Masuk',
                'contentOptions' => ['style' => 'width:200px; white-space: normal;'],
                'value'=>function($model) { 
                    $tgl_masuk = $model->getTanggalMasuk($model->no_rawat);
                    $tgl_sekarang = date("Y-m-d");
//                    print $tgl_sekarang;die;
                    $lama = date_diff( new DateTime($tgl_sekarang), new DateTime($tgl_masuk));
                     return $model->getTanggalMasuk($model->no_rawat)." (".$lama->d." hari)";
                },
            ],
            [
                'label' => 'Dokter',
                'contentOptions' => ['style' => 'width:200px; white-space: normal;'],
                'value'=>function($model) { 
                     return $model->dokter->nm_dokter;
                },
            ],
            [
                'attribute'=>'no_rkm_medis',
                'contentOptions' => ['style' => 'width:50px; white-space: normal;'],
            ],
            [
                'label' => 'Pasien',
                'contentOptions' => ['style' => 'width:200px; white-space: normal;'],
                'value'=>function($model) {
                    if($model->noRkmMedis->jk == 'L'){
                        $jk = 'L';
                    }else{
                        $jk = 'P';
                    }
                     return $model->noRkmMedis->nm_pasien."(".$jk.")";
                },
            ],
            [
                'label' => 'Jenis Bayar',
                'contentOptions' => ['style' => 'width:200px; white-space: normal;'],
                'value'=>function($model) { 
                     return $model->kdPj->png_jawab;
                },
            ],
            //'jam_reg',
            //'kd_dokter',
            //'no_rkm_medis',
            //'kd_poli',
            //'p_jawab',
            //'almt_pj',
            //'hubunganpj',
            //'biaya_reg',
            //'stts',
            //'stts_daftar',
            //'status_lanjut',
            //'kd_pj',
            //'umurdaftar',
            //'sttsumur',
            //'status_bayar',
            //'status_poli',
            [
                'class' => ActionColumn::className(),
                'header' => 'Aksi',
                'urlCreator' => function ($action, RegPeriksa $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'no_rawat' => $model->no_rawat]);
                 }
            ],
        ],
    ]); ?>


</div>
