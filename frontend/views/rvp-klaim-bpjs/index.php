<?php

use frontend\models\RvpKlaimBpjs;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var frontend\models\RvpKlaimBpjsSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Rvp Klaim Bpjs';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="rvp-klaim-bpjs-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Rvp Klaim Bpjs', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'no_rawat',
            'tanggal_rvp',
            'nip',
            'totalpiutang',
            'uangmuka',
            //'sudahdibayar',
            //'sisapiutang',
            //'tarifinacbg',
            //'dibayarbpjs',
            //'persenbayar',
            //'rugi',
            //'lebih',
            //'materialralan',
            //'bhpralan',
            //'tarif_tindakandrralan',
            //'tarif_tindakanprralan',
            //'ksoralan',
            //'menejemenralan',
            //'biaya_rawatralan',
            //'materialranap',
            //'bhpranap',
            //'tarif_tindakandrranap',
            //'tarif_tindakanprranap',
            //'ksoranap',
            //'menejemenranap',
            //'biaya_rawatranap',
            //'bagian_rslabralan',
            //'bhplabralan',
            //'tarif_perujuklabralan',
            //'tarif_tindakan_dokterlabralan',
            //'tarif_tindakan_petugaslabralan',
            //'ksolabralan',
            //'menejemenlabralan',
            //'biayalabralan',
            //'bagian_rslabranap',
            //'bhplabranap',
            //'tarif_perujuklabranap',
            //'tarif_tindakan_dokterlabranap',
            //'tarif_tindakan_petugaslabranap',
            //'ksolabranap',
            //'menejemenlabranap',
            //'biayalabranap',
            //'bagian_rsradiologiralan',
            //'bhpradiologiralan',
            //'tarif_perujukradiologiralan',
            //'tarif_tindakan_dokterradiologiralan',
            //'tarif_tindakan_petugasradiologiralan',
            //'ksoradiologiralan',
            //'menejemenradiologiralan',
            //'biayaradiologiralan',
            //'bagian_rsradiologiranap',
            //'bhpradiologiranap',
            //'tarif_perujukradiologiranap',
            //'tarif_tindakan_dokterradiologiranap',
            //'tarif_tindakan_petugasradiologiranap',
            //'ksoradiologiranap',
            //'menejemenradiologiranap',
            //'biayaradiologiranap',
            //'jmdokteroperasiralan',
            //'jmparamedisoperasiralan',
            //'bhpoperasiralan',
            //'pendapatanoperasiralan',
            //'jmdokteroperasiranap',
            //'jmparamedisoperasiranap',
            //'bhpoperasiranap',
            //'pendapatanoperasiranap',
            //'obatlangsung',
            //'obatralan',
            //'hppobatralan',
            //'obatranap',
            //'hppobatranap',
            //'returobat',
            //'tambahanbiaya',
            //'potonganbiaya',
            //'kamar',
            //'reseppulang',
            //'harianranap',
            //'registrasi',
            //'no_sep',
            //'kd_rek',
            //'kd_rek_kontra',
            //'service',
            //'ppn_obat',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, RvpKlaimBpjs $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'no_rawat' => $model->no_rawat]);
                 }
            ],
        ],
    ]); ?>


</div>
