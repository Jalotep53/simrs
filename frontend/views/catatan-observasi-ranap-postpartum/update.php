<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\CatatanObservasiRanapPostpartum $model */

$this->title = 'Update Catatan Observasi Ranap Postpartum: ' . $model->no_rawat;
$this->params['breadcrumbs'][] = ['label' => 'Catatan Observasi Ranap Postparta', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->no_rawat, 'url' => ['view', 'no_rawat' => $model->no_rawat, 'tgl_perawatan' => $model->tgl_perawatan, 'jam_rawat' => $model->jam_rawat]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="catatan-observasi-ranap-postpartum-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
