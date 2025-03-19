<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\PerpustakaanBayarDenda $model */

$this->title = 'Update Perpustakaan Bayar Denda: ' . $model->tgl_denda;
$this->params['breadcrumbs'][] = ['label' => 'Perpustakaan Bayar Dendas', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->tgl_denda, 'url' => ['view', 'tgl_denda' => $model->tgl_denda, 'no_anggota' => $model->no_anggota, 'no_inventaris' => $model->no_inventaris, 'kode_denda' => $model->kode_denda]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="perpustakaan-bayar-denda-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
