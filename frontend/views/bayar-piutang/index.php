<?php

use frontend\models\BayarPiutang;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var frontend\models\BayarPiutangSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Bayar Piutangs';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="bayar-piutang-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Bayar Piutang', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'tgl_bayar',
            'no_rkm_medis',
            'besar_cicilan',
            'catatan',
            'no_rawat',
            //'kd_rek',
            //'kd_rek_kontra',
            //'diskon_piutang',
            //'kd_rek_diskon_piutang',
            //'tidak_terbayar',
            //'kd_rek_tidak_terbayar',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, BayarPiutang $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'tgl_bayar' => $model->tgl_bayar, 'no_rkm_medis' => $model->no_rkm_medis, 'no_rawat' => $model->no_rawat, 'kd_rek' => $model->kd_rek, 'kd_rek_kontra' => $model->kd_rek_kontra]);
                 }
            ],
        ],
    ]); ?>


</div>
