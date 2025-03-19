<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\RawatJlPr $model */

$this->title = 'Update Rawat Jl Pr: ' . $model->no_rawat;
$this->params['breadcrumbs'][] = ['label' => 'Rawat Jl Prs', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->no_rawat, 'url' => ['view', 'no_rawat' => $model->no_rawat, 'kd_jenis_prw' => $model->kd_jenis_prw, 'nip' => $model->nip, 'tgl_perawatan' => $model->tgl_perawatan, 'jam_rawat' => $model->jam_rawat]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="rawat-jl-pr-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
