<?php

use frontend\models\PelayananInformasiObat;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var frontend\models\PelayananInformasiObatSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Pelayanan Informasi Obats';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="pelayanan-informasi-obat-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Pelayanan Informasi Obat', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'no_permintaan',
            'no_rawat',
            'tanggal',
            'metode',
            'penanya',
            //'status_penanya',
            //'no_telp_penanya',
            //'jenis_pertanyaan',
            //'keterangan_jenis_pertanyaan',
            //'uraian_pertanyaan',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, PelayananInformasiObat $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'no_permintaan' => $model->no_permintaan]);
                 }
            ],
        ],
    ]); ?>


</div>
