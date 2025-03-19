<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/** @var yii\web\View $this */
/** @var frontend\models\SuratKeluar $model */

$this->title = $model->no_urut;
$this->params['breadcrumbs'][] = ['label' => 'Surat Keluars', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="surat-keluar-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'no_urut' => $model->no_urut], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'no_urut' => $model->no_urut], [
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
            'no_urut',
            'no_surat',
            'tujuan',
            'tgl_surat',
            'perihal',
            'tgl_kirim',
            'kd_lemari',
            'kd_rak',
            'kd_map',
            'kd_ruang',
            'kd_sifat',
            'lampiran',
            'tembusan',
            'tgl_deadline_balas',
            'kd_balas',
            'keterangan',
            'kd_status',
            'kd_klasifikasi',
            'file_url:url',
        ],
    ]) ?>

</div>
