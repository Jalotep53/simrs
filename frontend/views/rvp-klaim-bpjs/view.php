<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/** @var yii\web\View $this */
/** @var frontend\models\RvpKlaimBpjs $model */

$this->title = $model->no_rawat;
$this->params['breadcrumbs'][] = ['label' => 'Rvp Klaim Bpjs', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="rvp-klaim-bpjs-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'no_rawat' => $model->no_rawat], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'no_rawat' => $model->no_rawat], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'no_rawat',
            'tanggal_rvp',
            'nip',
            'totalpiutang',
            'uangmuka',
            'sudahdibayar',
            'sisapiutang',
            'tarifinacbg',
            'dibayarbpjs',
            'persenbayar',
            'rugi',
            'lebih',
            'materialralan',
            'bhpralan',
            'tarif_tindakandrralan',
            'tarif_tindakanprralan',
            'ksoralan',
            'menejemenralan',
            'biaya_rawatralan',
            'materialranap',
            'bhpranap',
            'tarif_tindakandrranap',
            'tarif_tindakanprranap',
            'ksoranap',
            'menejemenranap',
            'biaya_rawatranap',
            'bagian_rslabralan',
            'bhplabralan',
            'tarif_perujuklabralan',
            'tarif_tindakan_dokterlabralan',
            'tarif_tindakan_petugaslabralan',
            'ksolabralan',
            'menejemenlabralan',
            'biayalabralan',
            'bagian_rslabranap',
            'bhplabranap',
            'tarif_perujuklabranap',
            'tarif_tindakan_dokterlabranap',
            'tarif_tindakan_petugaslabranap',
            'ksolabranap',
            'menejemenlabranap',
            'biayalabranap',
            'bagian_rsradiologiralan',
            'bhpradiologiralan',
            'tarif_perujukradiologiralan',
            'tarif_tindakan_dokterradiologiralan',
            'tarif_tindakan_petugasradiologiralan',
            'ksoradiologiralan',
            'menejemenradiologiralan',
            'biayaradiologiralan',
            'bagian_rsradiologiranap',
            'bhpradiologiranap',
            'tarif_perujukradiologiranap',
            'tarif_tindakan_dokterradiologiranap',
            'tarif_tindakan_petugasradiologiranap',
            'ksoradiologiranap',
            'menejemenradiologiranap',
            'biayaradiologiranap',
            'jmdokteroperasiralan',
            'jmparamedisoperasiralan',
            'bhpoperasiralan',
            'pendapatanoperasiralan',
            'jmdokteroperasiranap',
            'jmparamedisoperasiranap',
            'bhpoperasiranap',
            'pendapatanoperasiranap',
            'obatlangsung',
            'obatralan',
            'hppobatralan',
            'obatranap',
            'hppobatranap',
            'returobat',
            'tambahanbiaya',
            'potonganbiaya',
            'kamar',
            'reseppulang',
            'harianranap',
            'registrasi',
            'no_sep',
            'kd_rek',
            'kd_rek_kontra',
            'service',
            'ppn_obat',
        ],
    ]) ?>

</div>
