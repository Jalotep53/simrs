<?php

use frontend\models\BayarRawatJlDr;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var frontend\models\BayarRawatJlDrSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Bayar Rawat Jl Drs';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="bayar-rawat-jl-dr-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Bayar Rawat Jl Dr', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'no_bayar',
            'no_rawat',
            'kd_jenis_prw',
            'tgl_perawatan',
            'jam_rawat',
            //'tarif_tindakandr',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, BayarRawatJlDr $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'no_bayar' => $model->no_bayar, 'no_rawat' => $model->no_rawat, 'kd_jenis_prw' => $model->kd_jenis_prw, 'tgl_perawatan' => $model->tgl_perawatan, 'jam_rawat' => $model->jam_rawat]);
                 }
            ],
        ],
    ]); ?>


</div>
