<?php

use frontend\models\PenilaianKorbanKekerasan;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var frontend\models\PenilaianKorbanKekerasanSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Penilaian Korban Kekerasans';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="penilaian-korban-kekerasan-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Penilaian Korban Kekerasan', ['create'], ['class' => 'btn btn-success']) ?>
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
            'hubungan_dengan_pasien',
            'jumlah_saudara',
            //'kondisi_keluaga',
            //'hubungan_orang_terdekat',
            //'kekerasan_yang_dialami',
            //'tempat_kejadian',
            //'lama_kekerasan',
            //'periode_kekerasan',
            //'seberapa_sering_mengalami',
            //'pemicu_kekerasan',
            //'yang_melakukan_kekerasan',
            //'dampak_kekerasan',
            //'tanda_tanda_didapatkan',
            //'memerlukan_pendampingan',
            //'riwayat_kelainan',
            //'pemeriksaan_kepala',
            //'pemeriksaan_thoraks',
            //'pemeriksaan_leher',
            //'pemeriksaan_abdomen',
            //'pemeriksaan_genitalia',
            //'pemeriksaan_ekstrimitas_atas',
            //'pemeriksaan_ekstrimitas_bawah',
            //'pemeriksaan_anus',
            //'nip',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, PenilaianKorbanKekerasan $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'no_rawat' => $model->no_rawat]);
                 }
            ],
        ],
    ]); ?>


</div>
