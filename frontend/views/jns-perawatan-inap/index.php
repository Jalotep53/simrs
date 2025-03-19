<?php

use frontend\models\JnsPerawatanInap;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var frontend\models\JnsPerawatanInapSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Jns Perawatan Inaps';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="jns-perawatan-inap-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Jns Perawatan Inap', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'kd_jenis_prw',
            'nm_perawatan',
            'kd_kategori',
            'material',
            'bhp',
            //'tarif_tindakandr',
            //'tarif_tindakanpr',
            //'kso',
            //'menejemen',
            //'total_byrdr',
            //'total_byrpr',
            //'total_byrdrpr',
            //'kd_pj',
            //'kd_bangsal',
            //'status',
            //'kelas',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, JnsPerawatanInap $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'kd_jenis_prw' => $model->kd_jenis_prw]);
                 }
            ],
        ],
    ]); ?>


</div>
