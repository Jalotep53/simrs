<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\RawatJlDrpr $model */

$this->title = 'Update Rawat Jl Drpr: ' . $model->no_rawat;
$this->params['breadcrumbs'][] = ['label' => 'Rawat Jl Drprs', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->no_rawat, 'url' => ['view', 'no_rawat' => $model->no_rawat, 'kd_jenis_prw' => $model->kd_jenis_prw, 'kd_dokter' => $model->kd_dokter, 'nip' => $model->nip, 'tgl_perawatan' => $model->tgl_perawatan, 'jam_rawat' => $model->jam_rawat]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="rawat-jl-drpr-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
