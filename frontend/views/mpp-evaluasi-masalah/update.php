<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\MppEvaluasiMasalah $model */

$this->title = 'Update Mpp Evaluasi Masalah: ' . $model->no_rawat;
$this->params['breadcrumbs'][] = ['label' => 'Mpp Evaluasi Masalahs', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->no_rawat, 'url' => ['view', 'no_rawat' => $model->no_rawat, 'tanggal' => $model->tanggal, 'kode_masalah' => $model->kode_masalah]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="mpp-evaluasi-masalah-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
