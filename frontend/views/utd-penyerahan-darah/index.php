<?php

use frontend\models\UtdPenyerahanDarah;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var frontend\models\UtdPenyerahanDarahSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Utd Penyerahan Darahs';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="utd-penyerahan-darah-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Utd Penyerahan Darah', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'no_penyerahan',
            'tanggal',
            'dinas',
            'nip_cross',
            'keterangan',
            //'status',
            //'kd_rek',
            //'pengambil_darah',
            //'alamat_pengambil_darah',
            //'nip_pj',
            //'besarppn',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, UtdPenyerahanDarah $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'no_penyerahan' => $model->no_penyerahan]);
                 }
            ],
        ],
    ]); ?>


</div>
