<?php

use frontend\models\BayarPeriksaRadiologiPerujuk;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var frontend\models\BayarPeriksaRadiologiPerujukSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Bayar Periksa Radiologi Perujuks';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="bayar-periksa-radiologi-perujuk-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Bayar Periksa Radiologi Perujuk', ['create'], ['class' => 'btn btn-success']) ?>
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
            'tgl_periksa',
            'jam',
            //'tarif_perujuk',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, BayarPeriksaRadiologiPerujuk $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'no_bayar' => $model->no_bayar, 'no_rawat' => $model->no_rawat, 'kd_jenis_prw' => $model->kd_jenis_prw, 'tgl_periksa' => $model->tgl_periksa, 'jam' => $model->jam]);
                 }
            ],
        ],
    ]); ?>


</div>
