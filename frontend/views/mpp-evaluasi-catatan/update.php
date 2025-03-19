<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\MppEvaluasiCatatan $model */

$this->title = 'Update Mpp Evaluasi Catatan: ' . $model->no_rawat;
$this->params['breadcrumbs'][] = ['label' => 'Mpp Evaluasi Catatans', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->no_rawat, 'url' => ['view', 'no_rawat' => $model->no_rawat, 'tgl_implementasi' => $model->tgl_implementasi]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="mpp-evaluasi-catatan-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
