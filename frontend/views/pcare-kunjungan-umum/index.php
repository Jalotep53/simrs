<?php

use frontend\models\PcareKunjunganUmum;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var frontend\models\PcareKunjunganUmumSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Pcare Kunjungan Umums';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="pcare-kunjungan-umum-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Pcare Kunjungan Umum', ['create'], ['class' => 'btn btn-success']) ?>
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
            //'lingkarPerut',
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
            //'status',
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
                'urlCreator' => function ($action, PcareKunjunganUmum $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'no_rawat' => $model->no_rawat]);
                 }
            ],
        ],
    ]); ?>


</div>
