<?php

use frontend\models\RawatInapDrpr;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var frontend\models\RawatInapDrprSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Rawat Inap Drprs';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="rawat-inap-drpr-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Rawat Inap Drpr', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'no_rawat',
            'kd_jenis_prw',
            'kd_dokter',
            'nip',
            'tgl_perawatan',
            //'jam_rawat',
            //'material',
            //'bhp',
            //'tarif_tindakandr',
            //'tarif_tindakanpr',
            //'kso',
            //'menejemen',
            //'biaya_rawat',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, RawatInapDrpr $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'no_rawat' => $model->no_rawat, 'kd_jenis_prw' => $model->kd_jenis_prw, 'kd_dokter' => $model->kd_dokter, 'nip' => $model->nip, 'tgl_perawatan' => $model->tgl_perawatan, 'jam_rawat' => $model->jam_rawat]);
                 }
            ],
        ],
    ]); ?>


</div>
