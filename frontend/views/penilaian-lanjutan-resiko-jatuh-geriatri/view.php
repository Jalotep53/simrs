<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/** @var yii\web\View $this */
/** @var frontend\models\PenilaianLanjutanResikoJatuhGeriatri $model */

$this->title = $model->no_rawat;
$this->params['breadcrumbs'][] = ['label' => 'Penilaian Lanjutan Resiko Jatuh Geriatris', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="penilaian-lanjutan-resiko-jatuh-geriatri-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'no_rawat' => $model->no_rawat, 'tanggal' => $model->tanggal], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'no_rawat' => $model->no_rawat, 'tanggal' => $model->tanggal], [
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
            'tanggal',
            'penilaian_jatuh_skala1',
            'penilaian_jatuh_nilai1',
            'penilaian_jatuh_skala2',
            'penilaian_jatuh_nilai2',
            'penilaian_jatuh_skala3',
            'penilaian_jatuh_nilai3',
            'penilaian_jatuh_skala4',
            'penilaian_jatuh_nilai4',
            'penilaian_jatuh_skala5',
            'penilaian_jatuh_nilai5',
            'penilaian_jatuh_skala6',
            'penilaian_jatuh_nilai6',
            'penilaian_jatuh_skala7',
            'penilaian_jatuh_nilai7',
            'penilaian_jatuh_skala8',
            'penilaian_jatuh_nilai8',
            'penilaian_jatuh_skala9',
            'penilaian_jatuh_nilai9',
            'penilaian_jatuh_skala10',
            'penilaian_jatuh_nilai10',
            'penilaian_jatuh_skala11',
            'penilaian_jatuh_nilai11',
            'penilaian_jatuh_totalnilai',
            'hasil_skrining',
            'saran',
            'nip',
        ],
    ]) ?>

</div>
