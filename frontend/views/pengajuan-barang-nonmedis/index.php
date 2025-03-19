<?php

use frontend\models\PengajuanBarangNonmedis;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var frontend\models\PengajuanBarangNonmedisSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Pengajuan Barang Nonmedis';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="pengajuan-barang-nonmedis-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Pengajuan Barang Nonmedis', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'no_pengajuan',
            'nip',
            'tanggal',
            'status',
            'keterangan',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, PengajuanBarangNonmedis $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'no_pengajuan' => $model->no_pengajuan]);
                 }
            ],
        ],
    ]); ?>


</div>
