<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\BayarRawatJlDrpr $model */

$this->title = 'Update Bayar Rawat Jl Drpr: ' . $model->no_bayar;
$this->params['breadcrumbs'][] = ['label' => 'Bayar Rawat Jl Drprs', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->no_bayar, 'url' => ['view', 'no_bayar' => $model->no_bayar, 'no_rawat' => $model->no_rawat, 'kd_jenis_prw' => $model->kd_jenis_prw, 'tgl_perawatan' => $model->tgl_perawatan, 'jam_rawat' => $model->jam_rawat]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="bayar-rawat-jl-drpr-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
