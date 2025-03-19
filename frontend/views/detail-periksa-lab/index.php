<?php

use frontend\models\DetailPeriksaLab;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var frontend\models\DetailPeriksaLabSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Detail Periksa Labs';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="detail-periksa-lab-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Detail Periksa Lab', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'no_rawat',
            'kd_jenis_prw',
            'tgl_periksa',
            'jam',
            'id_template',
            //'nilai',
            //'nilai_rujukan',
            //'keterangan',
            //'bagian_rs',
            //'bhp',
            //'bagian_perujuk',
            //'bagian_dokter',
            //'bagian_laborat',
            //'kso',
            //'menejemen',
            //'biaya_item',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, DetailPeriksaLab $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'no_rawat' => $model->no_rawat, 'kd_jenis_prw' => $model->kd_jenis_prw, 'tgl_periksa' => $model->tgl_periksa, 'jam' => $model->jam, 'id_template' => $model->id_template]);
                 }
            ],
        ],
    ]); ?>


</div>
