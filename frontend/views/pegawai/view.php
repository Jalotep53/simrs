<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/** @var yii\web\View $this */
/** @var frontend\models\Pegawai $model */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Pegawais', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="pegawai-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id], [
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
            'id',
            'nik',
            'nama',
            'jk',
            'jbtn',
            'jnj_jabatan',
            'kode_kelompok',
            'kode_resiko',
            'kode_emergency',
            'departemen',
            'bidang',
            'stts_wp',
            'stts_kerja',
            'npwp',
            'pendidikan',
            'gapok',
            'tmp_lahir',
            'tgl_lahir',
            'alamat',
            'kota',
            'mulai_kerja',
            'ms_kerja',
            'indexins',
            'bpd',
            'rekening',
            'stts_aktif',
            'wajibmasuk',
            'pengurang',
            'indek',
            'mulai_kontrak',
            'cuti_diambil',
            'dankes',
            'photo',
            'no_ktp',
        ],
    ]) ?>

</div>
