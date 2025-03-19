<?php

use frontend\models\PemeriksaanRanap;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var frontend\models\PemeriksaanRanapSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Pemeriksaan Ranaps';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="pemeriksaan-ranap-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Pemeriksaan Ranap', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'no_rawat',
            'tgl_perawatan',
            'jam_rawat',
            'suhu_tubuh',
            'tensi',
            //'nadi',
            //'respirasi',
            //'tinggi',
            //'berat',
            //'spo2',
            //'gcs',
            //'kesadaran',
            //'keluhan',
            //'pemeriksaan',
            //'alergi',
            //'penilaian',
            //'rtl',
            //'instruksi',
            //'evaluasi',
            //'nip',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, PemeriksaanRanap $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'no_rawat' => $model->no_rawat, 'tgl_perawatan' => $model->tgl_perawatan, 'jam_rawat' => $model->jam_rawat]);
                 }
            ],
        ],
    ]); ?>


</div>
