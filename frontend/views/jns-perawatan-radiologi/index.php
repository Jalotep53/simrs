<?php

use frontend\models\JnsPerawatanRadiologi;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var frontend\models\JnsPerawatanRadiologiSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Jns Perawatan Radiologis';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="jns-perawatan-radiologi-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Jns Perawatan Radiologi', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'kd_jenis_prw',
            'nm_perawatan',
            'bagian_rs',
            'bhp',
            'tarif_perujuk',
            //'tarif_tindakan_dokter',
            //'tarif_tindakan_petugas',
            //'kso',
            //'menejemen',
            //'total_byr',
            //'kd_pj',
            //'status',
            //'kelas',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, JnsPerawatanRadiologi $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'kd_jenis_prw' => $model->kd_jenis_prw]);
                 }
            ],
        ],
    ]); ?>


</div>
