<?php

use frontend\models\PcareRujukKhusus;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var frontend\models\PcareRujukKhususSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Pcare Rujuk Khususes';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="pcare-rujuk-khusus-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Pcare Rujuk Khusus', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'no_rawat',
            'noKunjungan',
            'tglDaftar',
            'no_rkm_medis',
            'nm_pasien',
            //'noKartu',
            //'kdPoli',
            //'nmPoli',
            //'keluhan',
            //'kdSadar',
            //'nmSadar',
            //'sistole',
            //'diastole',
            //'beratBadan',
            //'tinggiBadan',
            //'respRate',
            //'heartRate',
            //'terapi',
            //'kdStatusPulang',
            //'nmStatusPulang',
            //'tglPulang',
            //'kdDokter',
            //'nmDokter',
            //'kdDiag1',
            //'nmDiag1',
            //'kdDiag2',
            //'nmDiag2',
            //'kdDiag3',
            //'nmDiag3',
            //'tglEstRujuk',
            //'kdPPK',
            //'kdKhusus',
            //'nmKhusus',
            //'kdSubSpesialis',
            //'nmSubSpesialis',
            //'catatan',
            //'kdTACC',
            //'nmTACC',
            //'alasanTACC',
            //'KdAlergiMakanan',
            //'NmAlergiMakanan',
            //'KdAlergiUdara',
            //'NmAlergiUdara',
            //'KdAlergiObat',
            //'NmAlergiObat',
            //'KdPrognosa',
            //'NmPrognosa',
            //'terapi_non_obat',
            //'bmhp',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, PcareRujukKhusus $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'no_rawat' => $model->no_rawat]);
                 }
            ],
        ],
    ]); ?>


</div>
