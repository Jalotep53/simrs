<?php

use frontend\models\PengajuanBarangMedis;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var frontend\models\PengajuanBarangMedisSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Pengajuan Barang Medis';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="pengajuan-barang-medis-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Pengajuan Barang Medis', ['create'], ['class' => 'btn btn-success']) ?>
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
                'urlCreator' => function ($action, PengajuanBarangMedis $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'no_pengajuan' => $model->no_pengajuan]);
                 }
            ],
        ],
    ]); ?>


</div>
