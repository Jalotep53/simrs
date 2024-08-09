<?php

use frontend\models\Pegawai;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var frontend\models\PegawaiSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Pegawais';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="pegawai-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Pegawai', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'nik',
            'nama',
            'jk',
            'jbtn',
            //'jnj_jabatan',
            //'kode_kelompok',
            //'kode_resiko',
            //'kode_emergency',
            //'departemen',
            //'bidang',
            //'stts_wp',
            //'stts_kerja',
            //'npwp',
            //'pendidikan',
            //'gapok',
            //'tmp_lahir',
            //'tgl_lahir',
            //'alamat',
            //'kota',
            //'mulai_kerja',
            //'ms_kerja',
            //'indexins',
            //'bpd',
            //'rekening',
            //'stts_aktif',
            //'wajibmasuk',
            //'pengurang',
            //'indek',
            //'mulai_kontrak',
            //'cuti_diambil',
            //'dankes',
            //'photo',
            //'no_ktp',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, Pegawai $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'id' => $model->id]);
                 }
            ],
        ],
    ]); ?>


</div>
