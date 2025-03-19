<?php

use frontend\models\AuditPembuanganLimbah;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var frontend\models\AuditPembuanganLimbahSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Audit Pembuangan Limbahs';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="audit-pembuangan-limbah-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Audit Pembuangan Limbah', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'tanggal',
            'id_ruang',
            'pemisahan_limbah_oleh_penghasil_limbah',
            'limbah_infeksius_dimasukkan_kantong_kuning',
            'limbah_noninfeksius_dimasukkan_kantong_hitam',
            //'limbah_tigaperempat_diikat',
            //'limbah_segera_dibawa_kepembuangan_sementara',
            //'kotak_sampah_dalam_kondisi_bersih',
            //'pembersihan_tempat_sampah_dengan_desinfekten',
            //'pembersihan_penampungan_sementara_dengan_desinfekten',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, AuditPembuanganLimbah $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'tanggal' => $model->tanggal, 'id_ruang' => $model->id_ruang]);
                 }
            ],
        ],
    ]); ?>


</div>
