<?php

use frontend\models\PenilaianFisioterapi;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var frontend\models\PenilaianFisioterapiSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Penilaian Fisioterapis';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="penilaian-fisioterapi-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Penilaian Fisioterapi', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'no_rawat',
            'tanggal',
            'informasi',
            'keluhan_utama',
            'rps',
            //'rpd',
            //'td',
            //'hr',
            //'rr',
            //'suhu',
            //'nyeri_tekan',
            //'nyeri_gerak',
            //'nyeri_diam',
            //'palpasi',
            //'luas_gerak_sendi',
            //'kekuatan_otot',
            //'statis',
            //'dinamis',
            //'kognitif',
            //'auskultasi',
            //'alat_bantu',
            //'ket_bantu',
            //'prothesa',
            //'ket_pro',
            //'deformitas',
            //'ket_deformitas',
            //'resikojatuh',
            //'ket_resikojatuh',
            //'adl',
            //'lainlain_fungsional',
            //'ket_fisik:ntext',
            //'pemeriksaan_musculoskeletal',
            //'pemeriksaan_neuromuscular',
            //'pemeriksaan_cardiopulmonal',
            //'pemeriksaan_integument',
            //'pengukuran_musculoskeletal',
            //'pengukuran_neuromuscular',
            //'pengukuran_cardiopulmonal',
            //'pengukuran_integument',
            //'penunjang',
            //'diagnosis_fisio',
            //'rencana_terapi',
            //'nip',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, PenilaianFisioterapi $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'no_rawat' => $model->no_rawat]);
                 }
            ],
        ],
    ]); ?>


</div>
