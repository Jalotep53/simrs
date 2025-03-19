<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/** @var yii\web\View $this */
/** @var frontend\models\PenilaianLanjutanResikoJatuhLansia $model */

$this->title = $model->no_rawat;
$this->params['breadcrumbs'][] = ['label' => 'Penilaian Lanjutan Resiko Jatuh Lansias', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="penilaian-lanjutan-resiko-jatuh-lansia-view">

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
            'penilaian_jatuhmorse_skala1',
            'penilaian_jatuhmorse_nilai1',
            'penilaian_jatuhmorse_skala2',
            'penilaian_jatuhmorse_nilai2',
            'penilaian_jatuhmorse_skala3',
            'penilaian_jatuhmorse_nilai3',
            'penilaian_jatuhmorse_skala4',
            'penilaian_jatuhmorse_nilai4',
            'penilaian_jatuhmorse_skala5',
            'penilaian_jatuhmorse_nilai5',
            'penilaian_jatuhmorse_skala6',
            'penilaian_jatuhmorse_nilai6',
            'penilaian_jatuhmorse_totalnilai',
            'hasil_skrining',
            'saran',
            'nip',
        ],
    ]) ?>

</div>
