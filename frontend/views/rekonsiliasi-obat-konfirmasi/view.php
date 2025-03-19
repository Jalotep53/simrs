<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/** @var yii\web\View $this */
/** @var frontend\models\RekonsiliasiObatKonfirmasi $model */

$this->title = $model->no_rekonsiliasi;
$this->params['breadcrumbs'][] = ['label' => 'Rekonsiliasi Obat Konfirmasis', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="rekonsiliasi-obat-konfirmasi-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'no_rekonsiliasi' => $model->no_rekonsiliasi], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'no_rekonsiliasi' => $model->no_rekonsiliasi], [
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
            'no_rekonsiliasi',
            'diterima_farmasi',
            'dikonfirmasi_apoteker',
            'nip',
            'diserahkan_pasien',
        ],
    ]) ?>

</div>
