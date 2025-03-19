<?php

use frontend\models\PcarePendaftaran;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var frontend\models\PcarePendaftaranSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Pcare Pendaftarans';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="pcare-pendaftaran-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Pcare Pendaftaran', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'no_rawat',
            'tglDaftar',
            'no_rkm_medis',
            'nm_pasien',
            'kdProviderPeserta',
            //'noKartu',
            //'kdPoli',
            //'nmPoli',
            //'keluhan',
            //'kunjSakit',
            //'sistole',
            //'diastole',
            //'beratBadan',
            //'tinggiBadan',
            //'respRate',
            //'lingkar_perut',
            //'heartRate',
            //'rujukBalik',
            //'kdTkp',
            //'noUrut',
            //'status',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, PcarePendaftaran $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'no_rawat' => $model->no_rawat]);
                 }
            ],
        ],
    ]); ?>


</div>
