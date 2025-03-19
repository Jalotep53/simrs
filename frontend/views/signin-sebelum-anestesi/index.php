<?php

use frontend\models\SigninSebelumAnestesi;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var frontend\models\SigninSebelumAnestesiSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Signin Sebelum Anestesis';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="signin-sebelum-anestesi-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Signin Sebelum Anestesi', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'no_rawat',
            'tanggal',
            'sncn',
            'tindakan',
            'kd_dokter_bedah',
            //'kd_dokter_anestesi',
            //'identitas',
            //'penandaan_area_operasi',
            //'alergi',
            //'resiko_aspirasi',
            //'resiko_aspirasi_rencana_antisipasi',
            //'resiko_kehilangan_darah',
            //'resiko_kehilangan_darah_line',
            //'resiko_kehilangan_darah_rencana_antisipasi',
            //'kesiapan_alat_obat_anestesi',
            //'kesiapan_alat_obat_anestesi_rencana_antisipasi',
            //'nip_perawat_ok',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, SigninSebelumAnestesi $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'no_rawat' => $model->no_rawat, 'tanggal' => $model->tanggal]);
                 }
            ],
        ],
    ]); ?>


</div>
