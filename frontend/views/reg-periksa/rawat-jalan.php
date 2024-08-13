<?php

use frontend\models\RegPeriksa;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;
use yii\materialicons\MD;

/** @var yii\web\View $this */
/** @var frontend\models\RegPeriksaSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Rawat Jalan';
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
                'attribute'=>'no_reg',
                'contentOptions' => ['style' => 'width:20px; white-space: normal;'],
            ],
         
            [
                'attribute'=>'no_rawat',
                'contentOptions' => ['style' => 'width:50px; white-space: normal;'],
            ],
            [
                'attribute'=>'tgl_registrasi',
                'contentOptions' => ['style' => 'width:50px; white-space: normal;'],
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
                    if($model->noRkmMedis->jk == 'P'){
                        echo '<span class="glyphicon glyphicon-eye-open"></span>';
                    }else{
                        echo '<span class="glyphicon glyphicon-eye-open"></span>';
                    }
                     return $model->noRkmMedis->nm_pasien;
                }
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
        'label' => 'Aksi',
        'format' => 'raw',
        'content' => 
        function($model) {
            return Html::a('<span class="glyphicon glyphicon-print"></span>Cetak', ['reg-periksa/cetak-rajal', 'no_rawat' =>     $model->no_rawat],
                ['class' => 'btn btn-primary']);
        }
    ],
    ]]); ?>


</div>
