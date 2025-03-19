<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\SatuSehatDiagnosticreportLab $model */

$this->title = 'Update Satu Sehat Diagnosticreport Lab: ' . $model->noorder;
$this->params['breadcrumbs'][] = ['label' => 'Satu Sehat Diagnosticreport Labs', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->noorder, 'url' => ['view', 'noorder' => $model->noorder, 'kd_jenis_prw' => $model->kd_jenis_prw, 'id_template' => $model->id_template]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="satu-sehat-diagnosticreport-lab-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
