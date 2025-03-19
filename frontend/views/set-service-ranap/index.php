<?php

use frontend\models\SetServiceRanap;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var frontend\models\SetServiceRanapSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Set Service Ranaps';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="set-service-ranap-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Set Service Ranap', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'nama_service',
            'besar',
            'laborat',
            'radiologi',
            'operasi',
            //'obat',
            //'ranap_dokter',
            //'ranap_paramedis',
            //'ralan_dokter',
            //'ralan_paramedis',
            //'tambahan',
            //'potongan',
            //'kamar',
            //'registrasi',
            //'harian',
            //'retur_Obat',
            //'resep_Pulang',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, SetServiceRanap $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'nama_service' => $model->nama_service]);
                 }
            ],
        ],
    ]); ?>


</div>
