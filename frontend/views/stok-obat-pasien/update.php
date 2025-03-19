<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\StokObatPasien $model */

$this->title = 'Update Stok Obat Pasien: ' . $model->tanggal;
$this->params['breadcrumbs'][] = ['label' => 'Stok Obat Pasiens', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->tanggal, 'url' => ['view', 'tanggal' => $model->tanggal, 'jam' => $model->jam, 'no_rawat' => $model->no_rawat, 'kode_brng' => $model->kode_brng, 'no_batch' => $model->no_batch, 'no_faktur' => $model->no_faktur]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="stok-obat-pasien-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
