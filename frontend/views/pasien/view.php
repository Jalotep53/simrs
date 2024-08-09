<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/** @var yii\web\View $this */
/** @var frontend\models\Pasien $model */

$this->title = $model->no_rkm_medis;
$this->params['breadcrumbs'][] = ['label' => 'Pasiens', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="pasien-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'no_rkm_medis' => $model->no_rkm_medis], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'no_rkm_medis' => $model->no_rkm_medis], [
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
            'no_rkm_medis',
            'nm_pasien',
            'no_ktp',
            'jk',
            'tmp_lahir',
            'tgl_lahir',
            'nm_ibu',
            'alamat',
            'gol_darah',
            'pekerjaan',
            'stts_nikah',
            'agama',
            'tgl_daftar',
            'no_tlp',
            'umur',
            'pnd',
            'keluarga',
            'namakeluarga',
            'kd_pj',
            'no_peserta',
            'kd_kel',
            'kd_kec',
            'kd_kab',
            'pekerjaanpj',
            'alamatpj',
            'kelurahanpj',
            'kecamatanpj',
            'kabupatenpj',
            'perusahaan_pasien',
            'suku_bangsa',
            'bahasa_pasien',
            'cacat_fisik',
            'email:email',
            'nip',
            'kd_prop',
            'propinsipj',
        ],
    ]) ?>

</div>
