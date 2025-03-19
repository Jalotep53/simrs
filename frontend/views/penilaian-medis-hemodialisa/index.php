<?php

use frontend\models\PenilaianMedisHemodialisa;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var frontend\models\PenilaianMedisHemodialisaSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Penilaian Medis Hemodialisas';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="penilaian-medis-hemodialisa-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Penilaian Medis Hemodialisa', ['create'], ['class' => 'btn btn-success']) ?>
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
            'anamnesis',
            'hubungan',
            //'ruangan',
            //'alergi',
            //'nyeri',
            //'status_nutrisi',
            //'hipertensi',
            //'keterangan_hipertensi',
            //'diabetes',
            //'keterangan_diabetes',
            //'batu_saluran_kemih',
            //'keterangan_batu_saluran_kemih',
            //'operasi_saluran_kemih',
            //'keterangan_operasi_saluran_kemih',
            //'infeksi_saluran_kemih',
            //'keterangan_infeksi_saluran_kemih',
            //'bengkak_seluruh_tubuh',
            //'keterangan_bengkak_seluruh_tubuh',
            //'urin_berdarah',
            //'keterangan_urin_berdarah',
            //'penyakit_ginjal_laom',
            //'keterangan_penyakit_ginjal_laom',
            //'penyakit_lain',
            //'keterangan_penyakit_lain',
            //'konsumsi_obat_nefro',
            //'keterangan_konsumsi_obat_nefro',
            //'dialisis_pertama',
            //'pernah_cpad',
            //'tanggal_cpad',
            //'pernah_transplantasi',
            //'tanggal_transplantasi',
            //'keadaan_umum',
            //'kesadaran',
            //'nadi',
            //'bb',
            //'td',
            //'suhu',
            //'napas',
            //'tb',
            //'hepatomegali',
            //'splenomegali',
            //'ascites',
            //'edema',
            //'whezzing',
            //'ronchi',
            //'ikterik',
            //'tekanan_vena',
            //'anemia',
            //'kardiomegali',
            //'bising',
            //'thorax',
            //'tanggal_thorax',
            //'ekg',
            //'tanggal_ekg',
            //'bno',
            //'tanggal_bno',
            //'usg',
            //'tanggal_usg',
            //'renogram',
            //'tanggal_renogram',
            //'biopsi',
            //'tanggal_biopsi',
            //'ctscan',
            //'tanggal_ctscan',
            //'arteriografi',
            //'tanggal_arteriografi',
            //'kultur_urin',
            //'tanggal_kultur_urin',
            //'laborat',
            //'tanggal_laborat',
            //'hematokrit',
            //'hemoglobin',
            //'leukosit',
            //'trombosit',
            //'hitung_jenis',
            //'ureum',
            //'urin_lengkap',
            //'kreatinin',
            //'cct',
            //'sgot',
            //'sgpt',
            //'ct',
            //'asam_urat',
            //'hbsag',
            //'anti_hcv',
            //'edukasi',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, PenilaianMedisHemodialisa $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'no_rawat' => $model->no_rawat]);
                 }
            ],
        ],
    ]); ?>


</div>
