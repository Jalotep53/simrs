<?php

use frontend\models\PenilaianPreInduksi;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var frontend\models\PenilaianPreInduksiSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Penilaian Pre Induksis';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="penilaian-pre-induksi-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Penilaian Pre Induksi', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'no_rawat',
            'tanggal',
            'kd_dokter',
            'tensi',
            'nadi',
            //'rr',
            //'suhu',
            //'ekg',
            //'lain_lain',
            //'asesmen',
            //'perencanaan',
            //'infus_perifier',
            //'cvc',
            //'posisi',
            //'premedikasi',
            //'premedikasi_keterangan',
            //'induksi',
            //'induksi_keterangan',
            //'face_mask_no',
            //'nasopharing_no',
            //'ett_no',
            //'ett_jenis',
            //'ett_viksasi',
            //'lma_no',
            //'lma_jenis',
            //'tracheostomi',
            //'bronchoscopi_fiberoptik',
            //'glidescopi',
            //'lain_lain_tatalaksana',
            //'intubasi_sesudah_tidur',
            //'intubasi_oral',
            //'intubasi_tracheostomi',
            //'intubasi_keterangan',
            //'sulit_ventilasi',
            //'sulit_intubasi',
            //'ventilasi',
            //'teknik_regional_jenis',
            //'teknik_regional_lokasi',
            //'teknik_regional_jenis_jarum',
            //'teknik_regional_kateter',
            //'teknik_regional_kateter_viksasi',
            //'teknik_regional_obat_obatan',
            //'teknik_regional_komplikasi',
            //'teknik_regional_hasil',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, PenilaianPreInduksi $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'no_rawat' => $model->no_rawat, 'tanggal' => $model->tanggal]);
                 }
            ],
        ],
    ]); ?>


</div>
