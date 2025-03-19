<?php

use frontend\models\PengajuanCuti;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var frontend\models\PengajuanCutiSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Pengajuan Cutis';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="pengajuan-cuti-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Pengajuan Cuti', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'no_pengajuan',
            'tanggal',
            'tanggal_awal',
            'tanggal_akhir',
            'nik',
            //'urgensi',
            //'alamat',
            //'jumlah',
            //'kepentingan',
            //'nik_pj',
            //'status',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, PengajuanCuti $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'no_pengajuan' => $model->no_pengajuan]);
                 }
            ],
        ],
    ]); ?>


</div>
