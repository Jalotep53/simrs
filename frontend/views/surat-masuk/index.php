<?php

use frontend\models\SuratMasuk;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var frontend\models\SuratMasukSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Surat Masuks';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="surat-masuk-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Surat Masuk', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'no_urut',
            'no_surat',
            'asal',
            'tujuan',
            'tgl_surat',
            //'perihal',
            //'tgl_terima',
            //'kd_lemari',
            //'kd_rak',
            //'kd_map',
            //'kd_ruang',
            //'kd_sifat',
            //'lampiran',
            //'tembusan',
            //'tgl_deadline_balas',
            //'kd_balas',
            //'keterangan',
            //'kd_status',
            //'kd_klasifikasi',
            //'file_url:url',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, SuratMasuk $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'no_urut' => $model->no_urut]);
                 }
            ],
        ],
    ]); ?>


</div>
