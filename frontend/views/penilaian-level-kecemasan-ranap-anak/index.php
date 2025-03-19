<?php

use frontend\models\PenilaianLevelKecemasanRanapAnak;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var frontend\models\PenilaianLevelKecemasanRanapAnakSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Penilaian Level Kecemasan Ranap Anaks';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="penilaian-level-kecemasan-ranap-anak-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Penilaian Level Kecemasan Ranap Anak', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'no_rawat',
            'tanggal',
            'cemas',
            'firasat_buruk',
            'takut_pikiran_sendiri',
            //'mudah_tersinggung',
            //'merasa_tegang',
            //'lesu',
            //'tak_bisa_istirahat_tenang',
            //'mudah_terkejut',
            //'mudah_menangis',
            //'gemetar',
            //'gelisah',
            //'takut_pada_gelap',
            //'takut_pada_orangasing',
            //'takut_pada_kerumunan_banyak_orang',
            //'takut_pada_binatang_besar',
            //'takut_pada_keramaian_lalu_lintas',
            //'takut_ditinggal_sendiri',
            //'sulit_tidur',
            //'terbangun_malam_hari',
            //'tidur_tidak_nyeyak',
            //'mimpi_buruk',
            //'bangun_dengan_lesu',
            //'banyak_mengalami_mimpi',
            //'mimpi_menakutkan',
            //'sulit_konsentrasi',
            //'daya_ingat_buruk',
            //'hilangnya_minat',
            //'berkurangnya_kesenangan_pada_hobi',
            //'sedih',
            //'bangun_dini_hari',
            //'perasaan_berubah',
            //'sakit_nyeri_di_otot',
            //'kaku',
            //'kedutan_otot',
            //'gigi_gemerutuk',
            //'suara_tidak_stabil',
            //'tinnitus',
            //'penglihatan_kabur',
            //'muka_merah_gejala_somatic',
            //'merasa_lemah',
            //'perasaan_ditusuk',
            //'takhikardia',
            //'berdebar',
            //'nyeri_di_dada',
            //'denyut_nadi_mengeras',
            //'perasaan_lesu',
            //'detak_jantung_menghilang',
            //'merasa_tertekan',
            //'perasaan_tercekik',
            //'sering_menarik_napas',
            //'napas_pendek',
            //'bulu_berdiri',
            //'sulit_menelan',
            //'perut_melilit',
            //'ganguan_pencernaan',
            //'rasa_kembung',
            //'nyeri_makan',
            //'terbakar_perut',
            //'sukar_bab',
            //'muntah',
            //'bab_lembek',
            //'kehilangan_bb',
            //'mual',
            //'sering_bak',
            //'tidak_bisa_menahan_kencing',
            //'menjadi_dingin',
            //'manorrhagia',
            //'amenorrhoea',
            //'ejakulasi_praecocks',
            //'ereksi_hilang',
            //'impotensi',
            //'mulut_kering',
            //'muka_merah_gejala_otonom',
            //'mudah_berkeringat',
            //'bulu_berdiri_gejala_otonom',
            //'sakit_kepala',
            //'gelisah_wawancara',
            //'napas_pendek_wawancara',
            //'jari_gemetar',
            //'kerut_kening',
            //'muka_tegang',
            //'tonus_meningkat',
            //'tidak_tenang',
            //'muka_merah_wawancara',
            //'total_skor',
            //'keterangan_skor',
            //'nip',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, PenilaianLevelKecemasanRanapAnak $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'no_rawat' => $model->no_rawat, 'tanggal' => $model->tanggal]);
                 }
            ],
        ],
    ]); ?>


</div>
