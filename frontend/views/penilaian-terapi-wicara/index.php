<?php

use frontend\models\PenilaianTerapiWicara;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var frontend\models\PenilaianTerapiWicaraSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Penilaian Terapi Wicaras';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="penilaian-terapi-wicara-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Penilaian Terapi Wicara', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'no_rawat',
            'tanggal',
            'diagnosa_terapi_wicara',
            'diagnosa_medis',
            'anamnesa',
            //'suhu',
            //'rr',
            //'nadi',
            //'td',
            //'perilaku_adaptif_kontak_mata',
            //'perilaku_adaptif_atensi',
            //'perilaku_adaptif_perilaku',
            //'kemampuan_bahasa_bicara_spontan',
            //'kemampuan_bahasa_pemahaman_bahasa',
            //'kemampuan_bahasa_pengujaran',
            //'kemampuan_bahasa_membaca',
            //'kemampuan_bahasa_penamaan',
            //'organ_wicara_anatomis_lip',
            //'organ_wicara_anatomis_tongue',
            //'organ_wicara_anatomis_hard_palate',
            //'organ_wicara_anatomis_soft_palate',
            //'organ_wicara_anatomis_uvula',
            //'organ_wicara_anatomis_mandibula',
            //'organ_wicara_anatomis_maxila',
            //'organ_wicara_anatomis_dental',
            //'organ_wicara_anatomis_faring',
            //'organ_wicara_fisiologis_lip',
            //'organ_wicara_fisiologis_tongue',
            //'organ_wicara_fisiologis_hard_palate',
            //'organ_wicara_fisiologis_soft_palate',
            //'organ_wicara_fisiologis_uvula',
            //'organ_wicara_fisiologis_mandibula',
            //'organ_wicara_fisiologis_maxilla',
            //'organ_wicara_fisiologis_dental',
            //'organ_wicara_fisiologis_faring',
            //'aktifitas_oral_menghisap',
            //'aktifitas_oral_mengunyah',
            //'aktifitas_oral_meniup',
            //'kemampuan_artikulasi_subtitusi',
            //'kemampuan_artikulasi_omisi',
            //'kemampuan_artikulasi_distorsi',
            //'kemampuan_artikulasi_adisi',
            //'resonasi',
            //'kemampuan_suara_nada',
            //'kemampuan_suara_kualitas',
            //'kemampuan_suara_kenyaringan',
            //'kemampuan_irama_kelancaran',
            //'kemampuan_menelan',
            //'pernafasan',
            //'tingkat_komunikasi_dekoding_pendengaran',
            //'tingkat_komunikasi_dekoding_penglihatan',
            //'tingkat_komunikasi_dekoding_kinesik',
            //'tingkat_komunikasi_enkoding_bicara',
            //'tingkat_komunikasi_enkoding_tulisan',
            //'tingkat_komunikasi_enkoding_mimik',
            //'tingkat_komunikasi_enkoding_gesture',
            //'penunjang_medis',
            //'perencanaan_terapi_tujuan',
            //'perencanaan_terapi_program',
            //'edukasi',
            //'tindak_lanjut',
            //'nip',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, PenilaianTerapiWicara $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'no_rawat' => $model->no_rawat]);
                 }
            ],
        ],
    ]); ?>


</div>
