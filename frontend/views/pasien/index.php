<?php

use frontend\models\Pasien;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var frontend\models\PasienSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Pasiens';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="pasien-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Pasien', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'no_rkm_medis',
            'nm_pasien',
            'no_ktp',
            'jk',
            'tmp_lahir',
            //'tgl_lahir',
            //'nm_ibu',
            //'alamat',
            //'gol_darah',
            //'pekerjaan',
            //'stts_nikah',
            //'agama',
            //'tgl_daftar',
            //'no_tlp',
            //'umur',
            //'pnd',
            //'keluarga',
            //'namakeluarga',
            //'kd_pj',
            //'no_peserta',
            //'kd_kel',
            //'kd_kec',
            //'kd_kab',
            //'pekerjaanpj',
            //'alamatpj',
            //'kelurahanpj',
            //'kecamatanpj',
            //'kabupatenpj',
            //'perusahaan_pasien',
            //'suku_bangsa',
            //'bahasa_pasien',
            //'cacat_fisik',
            //'email:email',
            //'nip',
            //'kd_prop',
            //'propinsipj',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, Pasien $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'no_rkm_medis' => $model->no_rkm_medis]);
                 }
            ],
        ],
    ]); ?>


</div>
