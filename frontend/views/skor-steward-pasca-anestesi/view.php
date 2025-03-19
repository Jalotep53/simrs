<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/** @var yii\web\View $this */
/** @var frontend\models\SkorStewardPascaAnestesi $model */

$this->title = $model->no_rawat;
$this->params['breadcrumbs'][] = ['label' => 'Skor Steward Pasca Anestesis', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="skor-steward-pasca-anestesi-view">

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
            'penilaian_skala1',
            'penilaian_nilai1',
            'penilaian_skala2',
            'penilaian_nilai2',
            'penilaian_skala3',
            'penilaian_nilai3',
            'penilaian_totalnilai',
            'keluar',
            'instruksi',
            'kd_dokter',
            'nip',
        ],
    ]) ?>

</div>
