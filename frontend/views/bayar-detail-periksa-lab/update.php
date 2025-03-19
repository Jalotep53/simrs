<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\BayarDetailPeriksaLab $model */

$this->title = 'Update Bayar Detail Periksa Lab: ' . $model->no_bayar;
$this->params['breadcrumbs'][] = ['label' => 'Bayar Detail Periksa Labs', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->no_bayar, 'url' => ['view', 'no_bayar' => $model->no_bayar, 'no_rawat' => $model->no_rawat, 'kd_jenis_prw' => $model->kd_jenis_prw, 'tgl_periksa' => $model->tgl_periksa, 'jam' => $model->jam, 'id_template' => $model->id_template]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="bayar-detail-periksa-lab-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
