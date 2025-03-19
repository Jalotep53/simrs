<?php

use frontend\models\ResumePasien;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var frontend\models\ResumePasienSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Resume Pasiens';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="resume-pasien-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Resume Pasien', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'no_rawat',
            'kd_dokter',
            'keluhan_utama:ntext',
            'jalannya_penyakit:ntext',
            'pemeriksaan_penunjang:ntext',
            //'hasil_laborat:ntext',
            //'diagnosa_utama',
            //'kd_diagnosa_utama',
            //'diagnosa_sekunder',
            //'kd_diagnosa_sekunder',
            //'diagnosa_sekunder2',
            //'kd_diagnosa_sekunder2',
            //'diagnosa_sekunder3',
            //'kd_diagnosa_sekunder3',
            //'diagnosa_sekunder4',
            //'kd_diagnosa_sekunder4',
            //'prosedur_utama',
            //'kd_prosedur_utama',
            //'prosedur_sekunder',
            //'kd_prosedur_sekunder',
            //'prosedur_sekunder2',
            //'kd_prosedur_sekunder2',
            //'prosedur_sekunder3',
            //'kd_prosedur_sekunder3',
            //'kondisi_pulang',
            //'obat_pulang:ntext',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, ResumePasien $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'no_rawat' => $model->no_rawat]);
                 }
            ],
        ],
    ]); ?>


</div>
