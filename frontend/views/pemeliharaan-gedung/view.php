<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/** @var yii\web\View $this */
/** @var frontend\models\PemeliharaanGedung $model */

$this->title = $model->no_pemeliharaan;
$this->params['breadcrumbs'][] = ['label' => 'Pemeliharaan Gedungs', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="pemeliharaan-gedung-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'no_pemeliharaan' => $model->no_pemeliharaan], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'no_pemeliharaan' => $model->no_pemeliharaan], [
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
            'no_pemeliharaan',
            'tanggal',
            'uraian_kegiatan',
            'nip',
            'pelaksana',
            'biaya',
            'jenis_pemeliharaan',
            'tindak_lanjut',
        ],
    ]) ?>

</div>
