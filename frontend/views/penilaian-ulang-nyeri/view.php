<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/** @var yii\web\View $this */
/** @var frontend\models\PenilaianUlangNyeri $model */

$this->title = $model->no_rawat;
$this->params['breadcrumbs'][] = ['label' => 'Penilaian Ulang Nyeris', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="penilaian-ulang-nyeri-view">

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
            'nyeri',
            'provokes',
            'ket_provokes',
            'quality',
            'ket_quality',
            'lokasi',
            'menyebar',
            'skala_nyeri',
            'durasi',
            'nyeri_hilang',
            'ket_nyeri',
            'nip',
        ],
    ]) ?>

</div>
