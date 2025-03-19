<?php

use frontend\models\AuditBundlePlabsi;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var frontend\models\AuditBundlePlabsiSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Audit Bundle Plabsis';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="audit-bundle-plabsi-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Audit Bundle Plabsi', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'tanggal',
            'id_ruang',
            'sebelum_melakukan_hand_hygiene',
            'menggunakan_apd_lengkap',
            'lokasi_pemasangan_sesuai',
            //'alat_yang_digunakan_steril',
            //'pembersihan_kulit',
            //'setelah_melakukan_hand_hygiene',
            //'perawatan_dressing_infus',
            //'spoit_yang_digunakan_disposible',
            //'memberi_tanggal_dan_jam_pemasangan_infus',
            //'set_infus_setiap_72jam',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, AuditBundlePlabsi $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'tanggal' => $model->tanggal, 'id_ruang' => $model->id_ruang]);
                 }
            ],
        ],
    ]); ?>


</div>
