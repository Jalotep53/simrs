<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\SatuSehatDiagnosticreportRadiologi $model */

$this->title = 'Create Satu Sehat Diagnosticreport Radiologi';
$this->params['breadcrumbs'][] = ['label' => 'Satu Sehat Diagnosticreport Radiologis', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="satu-sehat-diagnosticreport-radiologi-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
