<?php

use frontend\models\PcareTindakanRalanDiberikan;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var frontend\models\PcareTindakanRalanDiberikanSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Pcare Tindakan Ralan Diberikans';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="pcare-tindakan-ralan-diberikan-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Pcare Tindakan Ralan Diberikan', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'no_rawat',
            'noKunjungan',
            'kdTindakanSK',
            'tgl_perawatan',
            'jam',
            //'kd_jenis_prw',
            //'material',
            //'bhp',
            //'tarif_tindakandr',
            //'tarif_tindakanpr',
            //'kso',
            //'menejemen',
            //'biaya_rawat',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, PcareTindakanRalanDiberikan $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'no_rawat' => $model->no_rawat, 'noKunjungan' => $model->noKunjungan, 'tgl_perawatan' => $model->tgl_perawatan, 'jam' => $model->jam, 'kd_jenis_prw' => $model->kd_jenis_prw]);
                 }
            ],
        ],
    ]); ?>


</div>
