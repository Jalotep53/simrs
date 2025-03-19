<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\DetailPeriksaLabpa $model */

$this->title = 'Update Detail Periksa Labpa: ' . $model->no_rawat;
$this->params['breadcrumbs'][] = ['label' => 'Detail Periksa Labpas', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->no_rawat, 'url' => ['view', 'no_rawat' => $model->no_rawat, 'kd_jenis_prw' => $model->kd_jenis_prw, 'tgl_periksa' => $model->tgl_periksa, 'jam' => $model->jam]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="detail-periksa-labpa-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
