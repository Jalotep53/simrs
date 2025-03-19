<?php

use frontend\models\PemeriksaanObstetriRanap;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var frontend\models\PemeriksaanObstetriRanapSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Pemeriksaan Obstetri Ranaps';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="pemeriksaan-obstetri-ranap-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Pemeriksaan Obstetri Ranap', ['create'], ['class' => 'btn btn-success']) ?>
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
            'tinggi_uteri',
            'janin',
            //'letak',
            //'panggul',
            //'denyut',
            //'kontraksi',
            //'kualitas_mnt',
            //'kualitas_dtk',
            //'fluksus',
            //'albus',
            //'vulva',
            //'portio',
            //'dalam',
            //'tebal',
            //'arah',
            //'pembukaan',
            //'penurunan',
            //'denominator',
            //'ketuban',
            //'feto',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, PemeriksaanObstetriRanap $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'no_rawat' => $model->no_rawat, 'tgl_perawatan' => $model->tgl_perawatan, 'jam_rawat' => $model->jam_rawat]);
                 }
            ],
        ],
    ]); ?>


</div>
