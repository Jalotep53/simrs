<?php

use frontend\models\JnsPerawatanUtd;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var frontend\models\JnsPerawatanUtdSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Jns Perawatan Utds';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="jns-perawatan-utd-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Jns Perawatan Utd', ['create'], ['class' => 'btn btn-success']) ?>
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
            //'manajemen',
            //'total_byr',
            //'kd_pj',
            //'status',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, JnsPerawatanUtd $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'kd_jenis_prw' => $model->kd_jenis_prw]);
                 }
            ],
        ],
    ]); ?>


</div>
