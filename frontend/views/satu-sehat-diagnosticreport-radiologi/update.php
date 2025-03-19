<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\SatuSehatDiagnosticreportRadiologi $model */

$this->title = 'Update Satu Sehat Diagnosticreport Radiologi: ' . $model->noorder;
$this->params['breadcrumbs'][] = ['label' => 'Satu Sehat Diagnosticreport Radiologis', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->noorder, 'url' => ['view', 'noorder' => $model->noorder, 'kd_jenis_prw' => $model->kd_jenis_prw]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="satu-sehat-diagnosticreport-radiologi-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
