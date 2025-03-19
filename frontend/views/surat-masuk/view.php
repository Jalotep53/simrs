<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/** @var yii\web\View $this */
/** @var frontend\models\SuratMasuk $model */

$this->title = $model->no_urut;
$this->params['breadcrumbs'][] = ['label' => 'Surat Masuks', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="surat-masuk-view">

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
            'asal',
            'tujuan',
            'tgl_surat',
            'perihal',
            'tgl_terima',
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
