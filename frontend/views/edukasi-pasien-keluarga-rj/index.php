<?php

use frontend\models\EdukasiPasienKeluargaRj;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var frontend\models\EdukasiPasienKeluargaRjSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Edukasi Pasien Keluarga Rjs';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="edukasi-pasien-keluarga-rj-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Edukasi Pasien Keluarga Rj', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'no_rawat',
            'tanggal',
            'nip',
            'bicara',
            'keterangan_bicara',
            //'bahasa_sehari',
            //'perlu_penerjemah',
            //'keterangan_penerjemah',
            //'bahasa_isyarat',
            //'cara_belajar',
            //'hambatan_belajar',
            //'keterangan_hambatan_belajar',
            //'kemampuan_belajar',
            //'keterangan_kemampuan_belajar',
            //'penyakitnya_merupakan',
            //'keterangan_penyakitnya_merupakan',
            //'keputusan_memilih_layanan',
            //'keterangan_keputusan_memilih_layanan',
            //'keyakinan_terhadap_terapi',
            //'keterangan_keyakinan_terhadap_terapi',
            //'aspek_keyakinan_dipertimbangkan',
            //'keterangan_aspek_keyakinan_dipertimbangkan',
            //'kesediaan_menerima_informasi',
            //'topik_edukasi_penyakit',
            //'topik_edukasi_rencana_tindakan',
            //'topik_edukasi_pengobatan',
            //'topik_edukasi_hasil_layanan',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, EdukasiPasienKeluargaRj $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'no_rawat' => $model->no_rawat]);
                 }
            ],
        ],
    ]); ?>


</div>
