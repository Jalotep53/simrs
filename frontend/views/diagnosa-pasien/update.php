<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\DiagnosaPasien $model */

$this->title = 'Update Diagnosa Pasien: ' . $model->no_rawat;
$this->params['breadcrumbs'][] = ['label' => 'Diagnosa Pasiens', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->no_rawat, 'url' => ['view', 'no_rawat' => $model->no_rawat, 'kd_penyakit' => $model->kd_penyakit, 'status' => $model->status]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="diagnosa-pasien-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
