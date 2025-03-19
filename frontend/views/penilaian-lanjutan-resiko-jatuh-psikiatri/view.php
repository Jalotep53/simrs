<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/** @var yii\web\View $this */
/** @var frontend\models\PenilaianLanjutanResikoJatuhPsikiatri $model */

$this->title = $model->no_rawat;
$this->params['breadcrumbs'][] = ['label' => 'Penilaian Lanjutan Resiko Jatuh Psikiatris', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="penilaian-lanjutan-resiko-jatuh-psikiatri-view">

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
            'penilaian_jatuhedmonson_skala1',
            'penilaian_jatuhedmonson_nilai1',
            'penilaian_jatuhedmonson_skala2',
            'penilaian_jatuhedmonson_nilai2',
            'penilaian_jatuhedmonson_skala3',
            'penilaian_jatuhedmonson_nilai3',
            'penilaian_jatuhedmonson_skala4',
            'penilaian_jatuhedmonson_nilai4',
            'penilaian_jatuhedmonson_skala5',
            'penilaian_jatuhedmonson_nilai5',
            'penilaian_jatuhedmonson_skala6',
            'penilaian_jatuhedmonson_nilai6',
            'penilaian_jatuhedmonson_totalnilai',
            'hasil_skrining',
            'saran',
            'nip',
        ],
    ]) ?>

</div>
